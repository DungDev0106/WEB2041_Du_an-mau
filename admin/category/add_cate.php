
<p class="p-3 text-[28px] border bg-[#EEE] rounded-md">
                THÊM MỚI LOẠI HÀNG
            </p>
            <div class="form mt-5 leading-8">
                <form action="index_admin.php?act=add_cate" method="POST" autocomplete="on">
                    <p>Mã loại hàng</p>
                    <input class="border w-full rounded-[4px] h-[40px] px-3 border-[#FFC0CB]"
                           type="text" disabled name="ma_loai"
                           placeholder="Auto number">
                    <p>Tên loại</p>
                    <input class="border w-full rounded-[4px] h-[40px] px-3 border-[#FFC0CB]"
                           type="text" name="ten_loai" required
                           title="Tên loại hàng"
                           placeholder="Tên loại hàng..">
                    
                    <input class=" border px-3 py-1  mt-3 rounded-[4px] bg-[#FFC0CB] hover:font-[500]"
                           type="submit" value="Lưu lại" name="add_cate">
                    <input class=" border px-3 py-1 rounded-[4px] bg-[#FFC0CB] hover:font-[500]"
                           type="reset" value="Nhập lại" name="nhap_lai">
                    <a href="index_admin.php?act=list_cate"
                           class=" border px-3 py-[10.5px] rounded-[4px] bg-[#FFC0CB] hover:font-[500]">
                        Danh sách danh mục
                    </a>
                    <a href="index_admin.php?act=add_pro"
                           class=" border ml-[5px] px-3 py-[10.5px] rounded-[4px] bg-[#FFC0CB] hover:font-[500]">
                        Thêm mới sản phẩm
                    </a>
                </form>
                <?php
                    if(isset($thong_bao) && ($thong_bao!= "")) echo $thong_bao;
                ?>
            </div>
        </div> <!-- End .main-->
    </div> <!-- End .container-->