    $(document).ready(function() {
            $('#btnxoa').click(function() {
            $.ajax({
                    url: "delete_checkout.php",
                    type: 'GET',
                    async : false,
                success: function(){                   
                                $('#th_giohang').html('<h3 align="center">Đã xóa giỏ hàng</h3> ');      
                }
            });
            return false;
            }); //click         
            }); // ready
