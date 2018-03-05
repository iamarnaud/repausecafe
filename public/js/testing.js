QUnit.test( "Waiting for focus event", function( assert ) {
    assert.timeout( 1000 ); // Timeout of 1 second
    var done = assert.async();
    var input = $( "#srch-term2" ).focus();
    setTimeout(function() {
        assert.equal( document.activeElement, input[0], "Input was focused" );
        done();
    });
});

QUnit.test("Fonction addition", function(assert) {
    assert.equal(addition(3,2), 5 , "Bravo" );
});

QUnit.test("JeLike est une fonction", function(assert) {
    assert.deepEqual(typeof jeLike ,"function" ,"Bravo prout est une fonction");
});

QUnit.test("JeLike est une fonction", function(assert) {
    assert.ok(typeof jeLike === "function" ,"Bravo prout est une fonction");
});