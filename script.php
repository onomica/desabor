<?php

require_once dirname(__FILE__) . '/config/config.inc.php';
require_once dirname(__FILE__) . '/init.php';


function getProductByName($productName)
{
    $idLang = Context::getContext()->language->id; // ID текущего языка

    // Поиск продукта в базе данных
    $result = Db::getInstance()->getRow('
        SELECT p.id_product
        FROM ' . _DB_PREFIX_ . 'product p
        INNER JOIN ' . _DB_PREFIX_ . 'product_lang pl ON p.id_product = pl.id_product
        WHERE pl.name = "' . pSQL($productName) . '" AND pl.id_lang = ' . (int)$idLang
    );

    if ($result && isset($result['id_product'])) {
        return new Product((int)$result['id_product']); // Возвращает объект Product
    }

    return null; // Продукт не найден
}


function updateProductImage($productId, $imagePath)
{
    // Проверка существования продукта
    $product = getProductByName($productId);
    if (!Validate::isLoadedObject($product)) {
        echo "Продукт с ID $productId не найден.\n";
        return false;
    }
    $imagePath = '/home/lijpwpfm/domains/desabor.pl/public_html/img/test/' . $imagePath . '.jpg';
    // Проверка существования изображения
    if (!file_exists($imagePath)) {
        echo "Изображение $imagePath не найдено.\n";
        return false;
    }
    $productId = $product->id;
    try {
        // Удаляем старые изображения продукта
        $productImages = Image::getImages(Context::getContext()->language->id, $productId);
        foreach ($productImages as $productImage) {
            $image = new Image($productImage['id_image']);
            $image->delete();
        }

        // Создаем новое изображение
        $image = new Image();
        $image->id_product = $productId;
        $image->position = Image::getHighestPosition($productId) + 1;
        $image->cover = true; // Устанавливаем как главное изображение

        if ($image->add()) {
            // Путь для нового изображения
            $newImagePath = _PS_IMG_DIR_ . 'p/' . Image::getImgFolderStatic($image->id) . $image->id . '.jpg';

            // Создаем папку, если её нет
            if (!is_dir(dirname($newImagePath))) {
                mkdir(dirname($newImagePath), 0755, true);
            }

            // Копируем изображение
            if (copy($imagePath, $newImagePath)) {
                // Генерация миниатюр
                $image->update();
                $imagesTypes = ImageType::getImagesTypes('products');
                foreach ($imagesTypes as $imageType) {
                    ImageManager::resize(
                        $newImagePath,
                        _PS_IMG_DIR_ . 'p/' . Image::getImgFolderStatic($image->id) . $image->id . '-' . $imageType['name'] . '.jpg',
                        $imageType['width'],
                        $imageType['height']
                    );
                }

                echo "Изображение для продукта ID $productId успешно обновлено.\n";
            } else {
                echo "Ошибка копирования изображения для продукта ID $productId.\n";
            }
        } else {
            echo "Ошибка создания записи изображения для продукта ID $productId.\n";
        }
    } catch (Exception $e) {
        echo "Ошибка при обновлении изображения продукта ID $productId: " . $e->getMessage() . "\n";
        return false;
    }

    return true;
}

// Чтение CSV файла
$csvFile = __DIR__ . '/jjjj.csv'; // Укажите путь к вашему CSV файлу

if (!file_exists($csvFile)) {
    die("CSV файл $csvFile не найден.\n");
}

$handle = fopen($csvFile, 'r');
if ($handle === false) {
    die("Не удалось открыть CSV файл.\n");
}

fgetcsv($handle);

while (($data = fgetcsv($handle, 1000, ',')) !== false) {
    $productId = $data[0];
    $imagePath = $data[1];

    if ($productId && $imagePath) {
        updateProductImage($productId, $imagePath);
    } else {
        echo "Пропущена строка: " . implode(',', $data) . "\n";
    }
}

fclose($handle);
