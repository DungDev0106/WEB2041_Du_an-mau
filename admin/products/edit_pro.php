<?php 
    // show_array($list_cate)
?>

<section class="product w-full mt-5 leading-8">
    <p class="p-3 text-[28px] border bg-[#EEE] rounded-md">
                    CẬP NHẬT SẢN PHẨM
                </p>
        <form action="index_admin.php?act=update_pro" method="post" enctype="multipart/form-data">
            <div class="grid grid-cols-2 gap-x-8 gap-y-2">
                <div class="">
                    <p>Mã sản phẩm</p>
                    <input class="border w-full rounded-[4px] px-3 h-[40px]"
                           type="text" disabled name="ma_san_pham" id="ma_san_pham"
                           placeholder="Auto number" value="<?php echo $one_pro['pro_id']?>">
                </div>
                <div>
                    <label for="don_gia">Đơn giá</label>
                    <input class="border w-full rounded-[4px] px-3 h-[40px]" value="<?php echo $one_pro['pro_price']?>"
                           type="number"  name="don_gia" id="don_gia"
                           placeholder="Vui lòng nhập giá sản phẩm..">
                    <?php echo isset($error['empty_donGia'])?$error['empty_donGia'] :"" ?>
                </div>

                <div>
                    <label for="ten_san_pham">Tên sản phẩm</label>
                    <input class="border w-full rounded-[4px] px-3 h-[40px]" value="<?php echo $one_pro['pro_name']?>"
                           type="text"  name="ten_san_pham" id="ten_san_pham"
                           placeholder="Vui lòng nhập tên sản phẩm..">
                    <?php echo isset($error['empty_name'])?$error['empty_name'] :"" ?>
                </div>
                <div>
                    <label for="giam_gia"></label>
                    <input class="border w-full rounded-[4px] px-3 h-[40px]"
                           type="number"  name="giam_gia" id="giam_gia"
                           placeholder="Vui lòng nhập giảm giá..">
                </div>
                <div>
                    <p>Hình ảnh</p>
                    <img class="w-[300px] h-[300px]" src="<?php echo $one_pro['pro_image']?>" alt="">
                    <input class="border w-full rounded-[4px] px-3  h-[40px]"
                           type="file" name="hinh_anh"
                    >
                </div>
                <div>
                    <p>Tên danh mục</p>
                    <select name="category" id="" class="w-full px-3 border rounded-[4px] h-[40px]">
                        <option value="">--Chọn--</option>
                        <?php foreach ($list_cate as $cate){
                            
                        ?>
                            <option class="" <?php echo $one_pro['cate_id'] == $cate['cate_id'] ? "selected" : " "?> value="<?php echo $cate['cate_id']?>"><?php echo $cate['cate_name']?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div>
                <p>Mô tả</p>
                <textarea class="border w-full rounded-[4px] h-[100px] px-3 py-1 leading-[20px]"
                          name="mo_ta" id="" cols="30" rows="4"
                          placeholder="Mô tả sản phẩm..."
                          ><?php echo $one_pro['pro_desc']?></textarea>
            </div>
            <input type="hidden" name="pro_id" value="<?php echo $one_pro['pro_id']?>"> <!-- Lấy id của sản phẩm-->
            <input class=" border px-3 py-1  mt-3 rounded-[4px] bg-[#FFC0CB] hover:font-[500]"
                   type="submit" value="Cập nhật" name="edit_pro">
            <input class=" border px-3 py-1 mt-3 rounded-[4px] bg-[#FFC0CB] hover:font-[500]"
                   type="submit" value="Nhập lại" name="nhap_lai">
            <a href="index_admin.php?act=list_pro"
               class=" border px-3 py-[10.5px] mt-3 rounded-[4px] bg-[#FFC0CB] hover:font-[500]">
                Danh Sách Sản Phẩm
            </a>
            <a href="index_admin.php?act=add_cate"
               class=" border px-3 py-[10.5px] ml-1 mt-3 rounded-[4px] bg-[#FFC0CB] hover:font-[500]">
                Thêm mới danh mục
            </a>
        </form>

</section>