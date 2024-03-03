function edit(mode) {
    if (mode === "update") {
        document.getElementById("mode").value = "update";
        document.getElementById("form").submit();
    } else {
        var confirmationDialog = document.createElement("div");
        confirmationDialog.id = "confirmation-dialog";
        confirmationDialog.className = "p-4 mb-4 text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800";

        var dialogContent = `
            <div class="flex items-center">
                <svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                </svg>
                <span class="sr-only">Info</span>
                <h3 class="text-lg font-medium">Konfirmasi</h3>
            </div>
            <div class="mt-2 mb-4 text-sm">Yakin mau dihapus?</div>
            <div class="flex">
                <button type="button" id="confirm-button" class="text-white bg-red-800 hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-xs px-3 py-1.5 me-2 text-center inline-flex items-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                    <svg class="me-2 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                        <path d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                    </svg>
                    Ya
                </button>
                <button id="cancel-button" type="button" onclick="dismissAlert()" class="text-red-800 bg-transparent border border-red-800 hover:bg-red-900 hover:text-white focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:hover:bg-red-600 dark:border-red-600 dark:text-red-500 dark:hover:text-white dark:focus:ring-red-800" aria-label="Close">
                    Tidak
                </button>
            </div>
        `;

        confirmationDialog.innerHTML = dialogContent;

        document.body.appendChild(confirmationDialog);

        document.getElementById("confirm-button").addEventListener("click", function() {
            document.getElementById("mode").value = "delete";
            document.getElementById("form").submit();
        });

        document.getElementById("cancel-button").addEventListener("click", function() {
            document.body.removeChild(confirmationDialog);
            return false;
        });
    }
}
