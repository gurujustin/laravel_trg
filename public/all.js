/* Open the sidenav */
function openNav() {
    document.getElementById("menu-overlay").style.width = "100%";
}

/* Close/hide the sidenav */
function closeNav() {
    document.getElementById("menu-overlay").style.width = "0%";
}

$('.lazy').Lazy({
    scrollDirection: 'vertical',
    effect: 'fadeIn',
    effectTime: 1000,
    threshold: 500,
    visibleOnly: true,
    onError: function (element) {
        console.log('error loading ' + element.data('src'));
    }
});
$('.postcode-container').find('button').click(function(){
    alert('aa');
});