//alert("alert")
$( '.nav-link' ).on( 'click', function () {
    //console.log("test")
    alert("alert1")
	$( '.navbar-nav' ).find( 'li.active' ).removeClass( 'active' );
	$( this ).parent( 'li' ).addClass( 'active' );
});


$( '.nav-item' ).on( 'click', function () {
    //console.log("test")
    alert("alert2")
});

$( 'a' ).on( 'click', function () {
    //console.log("test")
    alert("alert3")
});