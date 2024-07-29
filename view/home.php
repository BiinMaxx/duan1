<div class="row mb ">
    <div class="boxtrai mr">
        <div class="row">
            <div class="banner">
            
    <div class="slideshow-container">

            <div class="mySlides fade">
            <img src="back/banner-quang-cao-giay-3.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
            <img src="back/banner-quang-cao-giay-3.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
            <img src="back/banner-quang-cao-giay-3.jpg" style="width:100%">
            </div>
            </div>
            <br>

            <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
            </div>
                    
            </div>
        </div>
        <div class="row">
            <?php
            $i = 0;
            foreach ($spnew as $sp) {
                extract($sp);
                $linksp = "index.php?act=sanphamct&idsp=" . $id;
                $hinh = $img_path . $img;
                if (($i == 2) || ($i == 5) || ($i == 8)) {
                    $mr = "";
                } else {
                    $mr = "mr";
                }
                echo '  <div class="boxsp ' . $mr . '">
                            <div class="row img"><a href="'.$linksp.'"><img src="' . $hinh . '" alt="" style="width:100%"></div>
                            <a href="'.$linksp.'">' . $name . '</a>
                            <p>' . $don_gia . '.VND</p>
                            <div class= "row btnaddtocart">
                                <form action="index.php?act=addtocart" method="post">
                                    <input type="hidden" name="id" value="'.$id.'">
                                    <input type="hidden" name="name" value="'.$name.'">
                                    <input type="hidden" name="img" value="'.$img.'">
                                    <input type="hidden" name="don_gia" value="'.$don_gia.'">
                                    <div class="soluong"> <h5>Số Lượng :</h5><input type="number" name="soluong" min="1" max="10"  value="1"></div>
                                    <div class="soluong"> <h5>SIZE Giày :</h5>   
                                        <select name="size">
                                                <option value="0"></option>
                                                <option value="38">38</option>
                                                <option value="39">39</option>
                                                <option value="40">40</option>
                                                <option value="41">41</option>
                                                <option value="42">42</option>
                                                <option value="43">43</option>
                                                <option value="44">44</option>
                                                <option value="45">45</option>
                                        </select>
                                    </div>
                                    <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                                </form>           
                            </div>
                        </div>';
                       $i += 1;
            }
            ?>
        </div>
    </div>
    <div class="boxphai">
        <?php include "boxright.php";?>
    </div>

</div>