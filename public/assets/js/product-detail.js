$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    responsive: {
        0: {
            items: 2,
            nav: true
        },
        600: {
            items: 3,
            nav: true
        },
        1000: {
            items: 4,
            nav: true,
            loop: false
        }
    }
});

// let right_wp = document.querySelector('.detail-product-wp');
// let right = document.querySelector('.detail-product__right');
// console.log(right_wp.offsetHeight);
// document.addEventListener('scroll', function (e) {
//     if (window.pageYOffset > 10 && window.pageYOffset < right_wp.offsetHeight) {
//         right.classList.add('detail-product__right--fixed')
//     }
//     else
//         right.classList.remove('detail-product__right--fixed')
// });
