<?php
$data = Message::getData();

if ($data) {
    $barang['nama_barang'] = $data['nama_barang'];
    $barang['jumlah'] = $data['jumlah'];
    $barang['harga_satuan'] = $data['harga_satuan'];
    $barang['expire_date'] = $data['kadaluarsa'];
}

Message::flash();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?= BASE_URL . '/public/css/output.css' ?>" rel="stylesheet">
    <title>Edit | <?=  $barang['nama_barang'] ?></title>
</head>

<body>
    <div class="flex items-center justify-center p-12">
        <div class="mx-auto w-full max-w-[550px]">
            <form id="form" action="<?= BASE_URL . '/crud/edit_saham' ?>" method="POST">
                <input type="hidden" name="id" value="<?= $barang['barang_id'] ?>">
                <input type="hidden" id="mode" name="mode" value="update">
                <div class="mb-5">
                    <label for="nama_barang" class="mb-3 block text-base font-medium text-[#07074D]">
                        Nama saham
                    </label>
                    <input type="text" name="nama_barang" id="nama_barang" placeholder="Nama saham"
                        value="<?= $barang['nama_barang'] ?>"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />

                </div>
                <div class="mb-5">
                    <label for="jumlah" class="mb-3 block text-base font-medium text-[#07074D]">
                        Jumlah
                    </label>
                    <input type="number" name="jumlah" id="jumlah" placeholder="Jumlah lot"
                        value="<?= $barang['jumlah'] ?>"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div class="mb-5">
                    <label for="harga_satuan" class="mb-3 block text-base font-medium text-[#07074D]">
                        Harga
                    </label>
                    <input type="number" name="harga_satuan" id="harga_satuan" placeholder="Harga"
                        value="<?= $barang['harga_satuan'] ?>"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div class="mb-5">
                    <label for="kadaluarsa" class="mb-3 block text-base font-medium text-[#07074D]">
                        Tanggal jual
                    </label>
                    <input type="date" name="kadaluarsa" id="kadaluarsa" value="<?= $barang['expire_date'] ?>"
                        placeholder="<?php
                        $currentDateTime = date('Y-m-d H:i:s');
                        echo $currentDateTime;
                        ?>
                    "
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div>
                    <button onclick="edit('update')" type="submit" class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none">
                        Edit
                    </button>
                    <button onclick="edit('delete')" type="submit" class="hover:shadow-form rounded-md bg-red-500 py-3 px-8 text-base font-semibold text-white outline-none">
                        Delete
                    </button>
                    
                </div>
            </form>
        </div>
    </div>
    <script src="../../../public/js/script.js"></script>
    <script src="sweetalert2.all.min.js"></script>
</body>

</html>
