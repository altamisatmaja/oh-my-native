<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?= BASE_URL . '/public/css/output.css' ?>" rel="stylesheet">
    <title>Create</title>
</head>

<body>
    <div class="flex items-center justify-center p-12">
        <div class="mx-auto w-full max-w-[550px]">
            <form action="<?= BASE_URL . '/crud/insert' ?>" method="POST">
                <div class="mb-5">
                    <label for="nama_barang" class="mb-3 block text-base font-medium text-[#07074D]">
                        Nama saham
                    </label>
                    <input type="text" name="nama_barang" id="nama_barang" placeholder="Nama saham"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div class="mb-5">
                    <label for="jumlah" class="mb-3 block text-base font-medium text-[#07074D]">
                        Jumlah
                    </label>
                    <input type="number" name="jumlah" id="jumlah" placeholder="Jumlah lot"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div class="mb-5">
                    <label for="harga_satuan" class="mb-3 block text-base font-medium text-[#07074D]">
                        Harga
                    </label>
                    <input type="number" name="harga_satuan" id="harga_satuan" placeholder="Harga"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div class="mb-5">
                    <label for="kadaluarsa" class="mb-3 block text-base font-medium text-[#07074D]">
                        Tanggal jual
                    </label>
                    <input type="date" name="kadaluarsa" id="kadaluarsa"
                        placeholder="<?php
                        $currentDateTime = date('Y-m-d H:i:s');
                        echo $currentDateTime;
                        ?>
                    "
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div>
                    <button type="submit"
                        class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
