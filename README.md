| 1. Introduction
----------------
You want to validate, compress images and more 

| 2. How to use it in your project
-----------------------
    2.1 Example your prject struct
    |__YourProject
        |__App
        |   |__Product.php
        |   |...
        |   
        |__config
        .
        .
        .
        |
        |__composer.json

    2.2 Use ImageProcessing package
        + composer.json
            {
                ....,
                "require": {
                    ....,
                    "trueme/image-processing": "dev-master",
                },
                .....
                "repositories": [
                    ...,
                    {
                        "type": "vcs",
                        "url": "https://github.com/quocvo87/ImageProcessing.git"
                    }
                ]
            }

        + Goto YourProject and run: composer update
            + Note: make sure your providers is cleared cached, if you don't know make sure pls run commands below:
            + Commands:
                + php artisan clear-compiled

        + Product.php
            <?php
            namespace xyz\Product;

            use ZipImg;

            $compressedImg = ZipImg::jpg('path_to_image.jpg')->compress();

