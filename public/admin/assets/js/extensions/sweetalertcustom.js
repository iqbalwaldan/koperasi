document.addEventListener('click', (e) => {
    if (e.target.classList.contains('btn-delete')) {
        const itemId = e.target.dataset.id;

        Swal.fire({
            title: "Apakah anda yakin?",
            text: "Anda tidak akan dapat mengembalikan data yang telah dihapus!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya, hapus!",
            cancelButtonText: "Batal"
        }).then((result) => {
            if (result.isConfirmed) {
                fetch(`/admin/siaran-pers/${itemId}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => {
                    if (response.ok) {
                        Swal.fire({
                            title: "Terhapus!",
                            text: "Data telah berhasil dihapus.",
                            icon: "success"
                        }).then(() => {
                            // Reload the page after SweetAlert closes
                            window.location.reload();
                        });
                    } else {
                        throw new Error('Gagal menghapus data.');
                    }
                })
                .catch(error => {
                    Swal.fire({
                        title: "Gagal!",
                        text: error.message,
                        icon: "error"
                    });
                });
            }
        });
    }
});

document.addEventListener('click', (e) => {
    if (e.target.classList.contains('btn-delete-file')) {
        const itemId = e.target.dataset.id;

        Swal.fire({
            title: "Apakah anda yakin?",
            text: "Anda tidak akan dapat mengembalikan data yang telah dihapus!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya, hapus!",
            cancelButtonText: "Batal"
        }).then((result) => {
            if (result.isConfirmed) {
                fetch(`/admin/data/${itemId}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => {
                    if (response.ok) {
                        Swal.fire({
                            title: "Terhapus!",
                            text: "Data telah berhasil dihapus.",
                            icon: "success"
                        }).then(() => {
                            // Reload the page after SweetAlert closes
                            window.location.reload();
                        });
                    } else {
                        throw new Error('Gagal menghapus data.');
                    }
                })
                .catch(error => {
                    Swal.fire({
                        title: "Gagal!",
                        text: error.message,
                        icon: "error"
                    });
                });
            }
        });
    }
});
document.addEventListener('click', (e) => {
    if (e.target.classList.contains('btn-delete-member')) {
        const itemId = e.target.dataset.id;

        Swal.fire({
            title: "Apakah anda yakin?",
            text: "Anda tidak akan dapat mengembalikan data yang telah dihapus!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya, hapus!",
            cancelButtonText: "Batal"
        }).then((result) => {
            if (result.isConfirmed) {
                fetch(`/admin/struktur-keanggotaan/${itemId}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => {
                    if (response.ok) {
                        Swal.fire({
                            title: "Terhapus!",
                            text: "Data telah berhasil dihapus.",
                            icon: "success"
                        }).then(() => {
                            // Reload the page after SweetAlert closes
                            window.location.reload();
                        });
                    } else {
                        throw new Error('Gagal menghapus data.');
                    }
                })
                .catch(error => {
                    Swal.fire({
                        title: "Gagal!",
                        text: error.message,
                        icon: "error"
                    });
                });
            }
        });
    }
});

document.addEventListener('click', (e) => {
    if (e.target.classList.contains('btn-delete-user')) {
        const username = e.target.dataset.username;

        Swal.fire({
            title: "Apakah anda yakin?",
            text: "Anda tidak akan dapat mengembalikan data yang telah dihapus!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya, hapus!",
            cancelButtonText: "Batal"
        }).then((result) => {
            if (result.isConfirmed) {
                fetch(`/admin/pengaturan/pengguna/${username}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => response.json().then(data => ({ status: response.status, body: data }))) // Ambil JSON
                .then(({ status, body }) => {
                    if (status === 200) {
                        Swal.fire({
                            title: "Terhapus!",
                            text: body.message,
                            icon: "success"
                        }).then(() => {
                            window.location.reload();
                        });
                    } else {
                        throw new Error(body.message); // Gunakan pesan dari server
                    }
                })
                .catch(error => {
                    Swal.fire({
                        title: "Gagal!",
                        text: error.message,
                        icon: "error"
                    });
                });
            }
        });
    }
});
document.addEventListener('click', (e) => {
    if (e.target.classList.contains('btn-delete-video')) {
        const slug = e.target.dataset.slug;

        Swal.fire({
            title: "Apakah anda yakin?",
            text: "Anda tidak akan dapat mengembalikan data yang telah dihapus!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya, hapus!",
            cancelButtonText: "Batal"
        }).then((result) => {
            if (result.isConfirmed) {
                fetch(`/admin/video/${slug}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => {
                    if (response.ok) {
                        Swal.fire({
                            title: "Terhapus!",
                            text: "Data telah berhasil dihapus.",
                            icon: "success"
                        }).then(() => {
                            // Reload the page after SweetAlert closes
                            window.location.reload();
                        });
                    } else {
                        throw new Error('Gagal menghapus data.');
                    }
                })
                .catch(error => {
                    Swal.fire({
                        title: "Gagal!",
                        text: error.message,
                        icon: "error"
                    });
                });
            }
        });
    }
});
