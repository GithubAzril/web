const swiper = new Swiper('.swiper', {
    // Opsi navigasi
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    // Opsi pagination
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    // Opsi lainnya
    loop: true, // Mengaktifkan loop
});