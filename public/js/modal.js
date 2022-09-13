$(document).ready(function () {
    let isDisabled;
    // Translate
    $('.translate').each(function() {
        $(this).click(function(event){
            isDisabled = false
            $('#submitBtn').text('Transate')
            $('#modalReportForm').attr("action", "/navigations/translate/"+$(this).data('nav')+"/"+$(this).data('id')+"/"+$(this).data('mainnavid')+"")
            $('#modalReportTitle').text($(this).data('title'))
            $('#navInput').val($(this).data('navigation'))
            $('#langSelect').prop('disabled', isDisabled)
            // console.log($(this).data('langid'));
        })
    });
    // Edit
    $('.edit').each(function() {
        $(this).click(function(event){
            isDisabled = true
            $('#submitBtn').text('Update')
            $('#modalReportForm').attr("action", "/navigations/update/"+$(this).data('nav')+"/"+$(this).data('id')+"")
            $('#modalReportTitle').text($(this).data('title'))
            $('#navInput').val($(this).data('navigation'))
            $('#select'+$(this).data('language')+'').attr('selected', 'selected')
            $('#langSelect').prop('disabled', isDisabled)
            // console.log($(this).data('title'));
        })
    });
});