$(document).ready(function () {
    $("#pricingPlanForm").submit(function (event) {
        submitForm();
        return false;
    });
});

function submitForm() {
    $.ajax({
        type: "POST",
        url: route('admin.createPlan'),
        cache: false,
        data: $('form#pricingPlanForm').serialize(),
        success: function (response) {
            $("#addplan").html(response)
            $("#pricing-plan-modal").modal('hide');
        },
        error: function () {
            alert("Error");
        }
    });
}