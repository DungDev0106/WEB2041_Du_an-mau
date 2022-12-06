<?php
    // show_array($list_cate);
?>

<section class="product w-full mt-5 leading-8">
    <p class="p-3 text-[28px] border bg-[#EEE] rounded-md">
        THÊM MỚI SẢN PHẨM
    </p>
    <?php
        if(isset($thong_bao) && $thong_bao != "") echo $thong_bao;
    ?>
        <form action="index_admin.php?act=add_pro" method="post" enctype="multipart/form-data">
            <div class="grid grid-cols-2 gap-x-8 gap-y-2">
                <div class="">
                    <p>Mã sản phẩm</p>
                    <input class="border w-full rounded-[4px] px-3 h-[40px]"
                           type="text" disabled name="ma_san_pham"
                           placeholder="Auto number">
                </div>
                <div>
                    <label for="don_gia">Đơn giá</label>
                    <input class="border w-full rounded-[4px] px-3 h-[40px]"
                           type="number"  name="don_gia" id ="don_gia"
                           placeholder="Vui lòng nhập giá sản phẩm..">
                    <?php echo isset($error['empty_pro_price'])?$error['empty_pro_price']:" "?>
                </div>

                <div>
                    <label for="ten_san_pham">Tên sản phẩm</label>
                    <input class="border w-full rounded-[4px] px-3 h-[40px]"
                           type="text" name="ten_san_pham" id="ten_san_pham"
                           placeholder="Vui lòng nhập tên sản phẩm..">
                    <?php echo isset($error['empty_pro_name'])?$error['empty_pro_name'] : " " ?>
                </div>
                <div>
                    <label for="giam_gia">Giảm giá</label>
                    <input class="border w-full rounded-[4px] px-3 h-[40px]"
                           type="number"  name="giam_gia" id="giam_gia"
                           placeholder="Vui lòng nhập giảm giá..">
                </div>
                <div>
                    <p>Hình ảnh</p>
                    <input class="border w-full rounded-[4px] px-3  h-[40px]"
                           type="file" name="hinh_anh"
                    >
                </div>
                <div>
                    <label for="category">Tên danh mục</label>
                    <select name="category" id="category" class="w-full px-3 border rounded-[4px] h-[40px]">
                        <option value="">--Chọn--</option>
                        <?php foreach ($list_cate as $cate) {?>
                            <option class="" value="<?php echo $cate['cate_id']?>"><?php echo $cate['cate_name']?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div>
                <label for="mo_ta">Mô tả</label>
                <textarea class="border w-full rounded-[4px] h-[100px] px-3 py-1 leading-[20px]"
                          name="mo_ta" id="mo_ta" cols="30" rows="4"
                          placeholder="Mô tả sản phẩm..."
                          ></textarea>
            </div>
            <input class=" border px-3 py-1  mt-3 rounded-[4px] bg-[#FFC0CB] hover:font-[500]"
                   type="submit" value="Lưu lại" name="add_pro">
            <input class=" border px-3 py-1 mt-3 rounded-[4px] bg-[#FFC0CB] hover:font-[500]"
                   type="submit" value="Nhập lại" name="nhap_lai">
            <a href="index_admin.php?act=list_pro"
               class=" border px-3 py-[10.5px] mt-3 rounded-[4px] bg-[#FFC0CB] hover:font-[500]">
                Danh Sách Sản Phẩm
            </a>
            <a href="index_admin.php?act=add_cate";
               class=" border px-3 py-[10.5px] ml-1 mt-3 rounded-[4px] bg-[#FFC0CB] hover:font-[500]">
                Thêm mới danh mục
            </a>
        </form>

</section>