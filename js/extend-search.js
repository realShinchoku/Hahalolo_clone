
var isExtend = false;
$(document).ready(function () {

    $('#btnExtendSearch').click(function () {
        if (isExtend) {
            $('.extend-item').empty();
            $('#btnExtendSearch').text('Tìm kiếm nâng cao');
            isExtend = false;
        }
        else {
            let extend_ouput = '';
                    extend_ouput = '<div class="search-item">';
                    extend_ouput = '<div class = "col-md-6">';
                    extend_ouput = '<div class="inputdecor-book btn-login-book">';
                    extend_ouput = '<input type="text" name="search1" id="search1" class = "effect-17" style="margin-left: -33px; width:222%" required>';
                    extend_ouput = '<label for="search1" class="lable-name-book">';
                    extend_ouput = '<span class="content-name2-book">';
                    extend_ouput = 'Bạn muốn đi đâu';
                    extend_ouput = '</span>';
                    extend_ouput = '</label>';
                    extend_ouput = '</div>';
                    extend_ouput = '</div>';
                    extend_ouput = '<div class = "col-md-6" style="margin-top: 10px;">';
                    extend_ouput = '<div class="inputdecor inputdecor-them">';
                    extend_ouput = '<label class="m-search-label">Ngày khởi hành</label>';
                    extend_ouput = '<input type="date" class="m-search-input" id="search2">';
                    extend_ouput = '</div>';
                    extend_ouput = '</div>';
                    extend_ouput = '</div>';
                    extend_ouput = '<div class="extend-item" style="display:none">';
                    extend_ouput = '<div class="search-item">';
                    extend_ouput = '<div class="inputdecor-book btn-login-book col-md-6">';
                    extend_ouput = '<input type="text" name="search3" id="search3" style="margin-left: -33px; width:100%" required>';
                    extend_ouput = '<label for="search3" class="lable-name-book">';
                    extend_ouput = '<span class="content-name2-book">';
                    extend_ouput = 'Điểm khởi hành';
                    extend_ouput = '</span>';
                    extend_ouput = '</label>';
                    extend_ouput = '</div>';
                    extend_ouput = '<div class="inputdecor-book btn-login-book col-md-6">';
                    extend_ouput = '<input type="text" name="search4" id="search4" style="margin-left: -33px; width:100%" required>';
                    extend_ouput = '<label for="search4" class="lable-name-book">';
                    extend_ouput = '<span class="content-name2-book">';
                    extend_ouput = 'Điểm đến';
                    extend_ouput = '</span>';
                    extend_ouput = '</label>';
                    extend_ouput = '</div>';
                    extend_ouput = '</div>';
                    extend_ouput = '<div class="search-item">';
                    extend_ouput = '<div class="inputdecor-book btn-login-book col-md-6">';
                    extend_ouput = '<input type="text" name="search5" id="search5" style="margin-left: -33px; width:100%" required>';
                    extend_ouput = '<label for="search5" class="lable-name-book">';
                    extend_ouput = '<span class="content-name2-book">';
                    extend_ouput = 'Chủ để tour';
                    extend_ouput = '</span>';
                    extend_ouput = '</label>';
                    extend_ouput = '</div>';
                    extend_ouput = '<div class="inputdecor-book btn-login-book col-md-6">';
                    extend_ouput = '<input type="text" name="search5" id="search6" style="margin-left: -33px; width:100%" required>';
                    extend_ouput = '<label for="search5" class="lable-name-book">';
                    extend_ouput = '<span class="content-name2-book">';
                    extend_ouput = 'Loại tour';
                    extend_ouput = '</span>';
                    extend_ouput = '</label>';
                    extend_ouput = '</div>';
                    extend_ouput = '</div>';
                    extend_ouput = '<div class="search-item">';
                    extend_ouput = '<div class="inputdecor-book btn-login-book col-md-6">';
                    extend_ouput = '<input type="number" name="search5" id="search5" style="margin-left: -33px; width:100%" min="0" required>';
                    extend_ouput = '<label for="search5" class="lable-name-book">';
                    extend_ouput = '<span class="content-name2-book">';
                    extend_ouput = 'Số ngày đi tour';
                    extend_ouput = '</span>';
                    extend_ouput = '</label>';
                    extend_ouput = '</div>';
                    extend_ouput = '<div class="inputdecor-book btn-login-book col-md-6">';
                    extend_ouput = '<input type="number" name="search5" id="search6" style="margin-left: -33px; width:100%" min="0" required>';
                    extend_ouput = '<label for="search5" class="lable-name-book">';
                    extend_ouput = '<span class="content-name2-book">';
                    extend_ouput = 'Khoảng giá';
                    extend_ouput = '</span>';
                    extend_ouput = '</label>';
                    extend_ouput = '</div>';
                    extend_ouput = '</div>';
                    extend_ouput = '<div class="search-item1" style = "display: flex;font-size: 18px;">';
                    extend_ouput = '<div style="padding: 8px; display:flex;">';
                    extend_ouput = '<div class="inputdecor1 col-md-6">';
                    extend_ouput = '<input type="checkbox" name="search7" id="search7">'
                    extend_ouput = '<label for="search7" class="lable-name">';
                    extend_ouput = '<span class="content-name3">';
                    extend_ouput = 'Có áp dụng khuyến mãi';
                    extend_ouput = '</span>';
                    extend_ouput = '</label>';
                    extend_ouput = '</div>';
                    extend_ouput = '<div class="inputdecor12 col-md-6">';
                    extend_ouput = '<input type="checkbox" name="search8" id="search8">';
                    extend_ouput = '<label for="search8" class="lable-name">';
                    extend_ouput = '<span class="content-name3">';
                    extend_ouput = 'Tour trả góp';
                    extend_ouput = '</span>';
                    extend_ouput = '</label>';
                    extend_ouput = '</div>';
                    extend_ouput = '</div>';
                    extend_ouput = '</div>';
                    extend_ouput = '</div>';
            $('.extend-item').html(extend_ouput);
            $('#btnExtendSearch').text('Thu gọn');
            isExtend = true;
        }
    });
});