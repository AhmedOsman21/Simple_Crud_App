// Adding Records
function addRecord() {
    // Get Data
    var username = $("#username").val();
    var fname    = $("#fname").val();
    var lname    = $("#lname").val();
    var email    = $("#email").val();

    // Add record
    $.post("ajax/add_record.php", {
        username: username,
        fname:    fname,
        lname:    lname,
        email:    email
    }, function (data, status) {
        // close the popup
        $("#new_rec_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#username").val("");
        $("#fname").val("");
        $("#lname").val("");
        $("#email").val("");
    });
}

// READ records
function readRecords() {
    $.get("ajax/read_records.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}
