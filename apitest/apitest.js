pm.sendRequest("https://jegyzet.igenyeshonlap.hu/api/v1/note", function(err, response) {
    console.log(response.json());
});
pm.test("Status code is 500", function() {
    pm.response.to.have.status(500);
});
pm.test("Body is correct", function() {
    pm.response.to.have.body("response_body_string");
});
pm.test("Response time is less than 200ms", function() {
    pm.expect(pm.response.responseTime).to.be.below(200);

});