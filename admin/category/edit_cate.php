
<?php

?>

<p class="p-3 text-[28px] border bg-[#EEE] rounded-md">
                CẬP NHẬT LOẠI HÀNG
            </p>
            <div class="form mt-5 leading-8">
                <form action="index_admin.php?act=update_cate" method="POST" autocomplete="on">
                    <p>Mã loại hàng</p>
                    <input class="border w-full rounded-[4px] h-[40px] px-3 border-[#FFC0CB]"
                           type="text" disabled name="ma_loai"
                           placeholder="Auto number"
                           value="<?php echo $one_cate['cate_id']?>">
                    <label for="ten_loai">Tên loại hàng</label>
                    <input class="border w-full rounded-[4px] h-[40px] px-3 border-[#FFC0CB]"
                           type="text" name="ten_loai" required id = "ten_loai"
                           title="Tên loại hàng"
                           placeholder="Tên loại hàng.."
                           value="<?php echo $one_cate['cate_name']?>">
                    
                    <input type="hidden" name="cate_id" value="<?php echo $one_cate['cate_id']?>">       
                    <input class=" border px-3 py-1  mt-3 rounded-[4px] bg-[#FFC0CB] hover:font-[500]"
                           type="submit" value="Cập nhật" name="edit_cate">
                    <input class=" border px-3 py-1 rounded-[4px] bg-[#FFC0CB] hover:font-[500]"
                           type="reset" value="Nhập lại" name="nhap_lai">
                    <a href="index_admin.php?act=list_cate"
                           class=" border px-3 py-[10.5px] rounded-[4px] bg-[#FFC0CB] hover:font-[500]">
                        Danh sách danh mục
                    </a>
                    <a href="../product/add_pro.php"
                           class=" border ml-[5px] px-3 py-[10.5px] rounded-[4px] bg-[#FFC0CB] hover:font-[500]">
                        Thêm mới sản phẩm
                    </a>
                </form>
                <?php
                    
                ?>
            </div>
        </div> <!-- End .main-->
    </div> <!-- End .container-->