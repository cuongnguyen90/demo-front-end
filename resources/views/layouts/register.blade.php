@extends('layouts.master')
@section('contents')
    <div class="content">

        <div class="container">
            <div class="row">
                <!-- get content -->
                <!--begin::Base Scripts -->
                <div class="col-sm-8 box-left">
                    <form action="" method="post" id="register-form" enctype="multipart/form-data">
                        <div class="box_form">
                            <h3>ĐĂNG KÝ TÀI KHOẢN MỚI<br>
                                TRÊN BLOGRADIO.vn</h3>

                            <div class="avatar">
                                <a href="javascript:void(0)">
                                    <img src="/frontend_res/assets/img/svg/profile-default.svg" id="preview-avatar">
                                </a>

                                <p>
                                    <button id="register-open-avatar">Chọn ảnh</button>
                                    <input type="file" name="avatar" class="hidden" id="register-select-avatar" accept="image/gif, image/jpeg, image/png, image/jpg">
                                </p>
                                <p style="margin: 10px 0px">Vui lòng tải lên ảnh vuông, kích thước tối đa 500x500 px,
                                    <br> dung lượng không quá 200kb.</p>

                            </div>
                            <div class="text-center">
                            </div>
                            <div class="row">
                                <div class="col-xs-10 col-xs-offset-1 col-sm-11 col-sm-offset-0">
                                    <div class="content_form">
                                        <div class="row">
                                            <div class="col-sm-4"></div>
                                            <div class="col-sm-8 pl-0 hidden-xs"><span class="error">(*) Thông tin bắt buộc</span></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-4">
                                                <label>Họ tên hoặc bút danh: <span class="error hidden-sm hidden-lg hidden-md text-center">(*) Thông tin bắt buộc</span></label>
                                            </div>
                                            <div class="col-sm-8 pl-0">
                                            <span class="box_input">
                                    <input class="form-control" name="data[fullname]">
                                    <span class="error">*</span>
                                            </span>
                                                <div class="validate-error-form" id="fname-error"></div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-4">
                                                <label>Email:</label>
                                            </div>
                                            <div class="col-sm-8 pl-0">
                                            <span class="box_input">
                                    <input class="form-control" name="data[email]">
                                    <span class="error">*</span>
                                            </span>
                                                <div class="validate-error-form" id="email-error"></div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-4">
                                                <label>Mật khẩu:</label>
                                            </div>
                                            <div class="col-sm-8 pl-0">
                                            <span class="box_input">
                                    <input class="form-control" name="data[password]" type="password">
                                    <span class="error">*</span>
                                            </span>
                                                <div class="validate-error-form" id="pwd-error"></div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-4">
                                                <label>Nhập lại mật khẩu:</label>
                                            </div>
                                            <div class="col-sm-8 pl-0">
                                            <span class="box_input">
                                    <input class="form-control" name="data[re_password]" type="password">
                                    <span class="error">*</span>
                                            </span>

                                                <div class="error" style="margin-top: 5px">Bạn nên sử dụng mật khẩu có cả chữ, số, ký tự đặc biệt và
                                                    <br> chưa được dùng ở đâu khác
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-4">
                                                <label>Ngày sinh:</label>
                                            </div>
                                            <div class="col-sm-8 pl-0">
                                                <div class="row box-date">
                                                    <div class="col-xs-11">
                                                        <div class="row">
                                                            <div class="col-sm-10">
                                                                <div class="row">
                                                                    <div class="col-sm-4 col-xs-4 pr-0">
                                                                        <select class="form-control birthday" name="data[day]">

                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                            <option>4</option>
                                                                            <option>5</option>
                                                                            <option>6</option>
                                                                            <option>7</option>
                                                                            <option>8</option>
                                                                            <option>9</option>
                                                                            <option>10</option>
                                                                            <option>11</option>
                                                                            <option>12</option>
                                                                            <option>13</option>
                                                                            <option>14</option>
                                                                            <option>15</option>
                                                                            <option>16</option>
                                                                            <option>17</option>
                                                                            <option>18</option>
                                                                            <option>19</option>
                                                                            <option>20</option>
                                                                            <option>21</option>
                                                                            <option>22</option>
                                                                            <option>23</option>
                                                                            <option>24</option>
                                                                            <option>25</option>
                                                                            <option>26</option>
                                                                            <option>27</option>
                                                                            <option>28</option>
                                                                            <option>29</option>
                                                                            <option>30</option>
                                                                            <option>31</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-4 col-xs-4 pr-0">
                                                                        <select class="form-control birthday" name="data[month]">
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                            <option>4</option>
                                                                            <option>5</option>
                                                                            <option>6</option>
                                                                            <option>7</option>
                                                                            <option>8</option>
                                                                            <option>9</option>
                                                                            <option>10</option>
                                                                            <option>11</option>
                                                                            <option>12</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-4 col-xs-4 pr-0">
                                                                        <select class="form-control birthday" name="data[year]">
                                                                            <option>2019</option>
                                                                            <option>2018</option>
                                                                            <option>2017</option>
                                                                            <option>2016</option>
                                                                            <option>2015</option>
                                                                            <option>2014</option>
                                                                            <option>2013</option>
                                                                            <option>2012</option>
                                                                            <option>2011</option>
                                                                            <option>2010</option>
                                                                            <option>2009</option>
                                                                            <option>2008</option>
                                                                            <option>2007</option>
                                                                            <option>2006</option>
                                                                            <option>2005</option>
                                                                            <option>2004</option>
                                                                            <option>2003</option>
                                                                            <option>2002</option>
                                                                            <option>2001</option>
                                                                            <option>2000</option>
                                                                            <option>1999</option>
                                                                            <option>1998</option>
                                                                            <option>1997</option>
                                                                            <option>1996</option>
                                                                            <option>1995</option>
                                                                            <option>1994</option>
                                                                            <option>1993</option>
                                                                            <option>1992</option>
                                                                            <option>1991</option>
                                                                            <option>1990</option>
                                                                            <option>1989</option>
                                                                            <option>1988</option>
                                                                            <option>1987</option>
                                                                            <option>1986</option>
                                                                            <option>1985</option>
                                                                            <option>1984</option>
                                                                            <option>1983</option>
                                                                            <option>1982</option>
                                                                            <option>1981</option>
                                                                            <option>1980</option>
                                                                            <option>1979</option>
                                                                            <option>1978</option>
                                                                            <option>1977</option>
                                                                            <option>1976</option>
                                                                            <option>1975</option>
                                                                            <option>1974</option>
                                                                            <option>1973</option>
                                                                            <option>1972</option>
                                                                            <option>1971</option>
                                                                            <option>1970</option>
                                                                            <option>1969</option>
                                                                            <option>1968</option>
                                                                            <option>1967</option>
                                                                            <option>1966</option>
                                                                            <option>1965</option>
                                                                            <option>1964</option>
                                                                            <option>1963</option>
                                                                            <option>1962</option>
                                                                            <option>1961</option>
                                                                            <option>1960</option>
                                                                            <option>1959</option>
                                                                            <option>1958</option>
                                                                            <option>1957</option>
                                                                            <option>1956</option>
                                                                            <option>1955</option>
                                                                            <option>1954</option>
                                                                            <option>1953</option>
                                                                            <option>1952</option>
                                                                            <option>1951</option>
                                                                            <option>1950</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="col-sm-3 pl-0 hidden-xs">
                                                                    <span class="error" style="line-height: 40px">*</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-xs-1 pl-0 hidden-md hidden-lg hidden-sm error_date">
                                                        <span class="error" style="line-height: 40px">*</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group box_gender">
                                            <div class="col-sm-4 col-xs-4">
                                                <label style="line-height: 20px">Giới tính:</label>
                                            </div>
                                            <div class="col-sm-8 pl-0 col-xs-8">
                                                <div class="d-flex">
                                                <span class="mr-15">
                                       <input id="female" type="radio" name="data[gender]" value="male" checked="">
                                        <label for="female">Nam</label>
                                    </span>
                                                    <span class="mr-15">
                                        <input id="male" type="radio" name="data[gender]" value="female">
                                        <label for="male">Nữ</label>
                                    </span>
                                                    <span>
                                        <input id="other" type="radio" name="data[gender]" value="other">
                                        <label for="other">Khác</label>
                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-4">
                                                <label>Chứng minh nhân dân:</label>
                                            </div>
                                            <div class="col-sm-8 pl-0">
                                            <span class="box_input">
                                    <input class="form-control" name="data[cmnd]">
                                </span>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-4">
                                                <label>Nghề nghiệp:</label>
                                            </div>
                                            <div class="col-sm-8 pl-0">
                                            <span class="box_input">
                                    <input class="form-control" name="data[job]">
                                </span>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-4">
                                                <label>Số điện thoại:</label>
                                            </div>
                                            <div class="col-sm-8 pl-0">
                                            <span class="box_input">
                                    <input class="form-control" name="data[phone]">
                                </span>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-4">
                                                <label>Địa chỉ:</label>
                                            </div>
                                            <div class="col-sm-8 pl-0">
                                            <span class="box_input">
                                    <input class="form-control" name="data[address]">
                                </span>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-4">
                                                <label>Tỉnh thành:</label>
                                            </div>
                                            <div class="col-sm-8 pl-0">
                                            <span class="box_input">
                                    <input class="form-control" name="data[city]">
                                </span>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-4">
                                                <label>Giới thiệu:</label>
                                            </div>
                                            <div class="col-sm-8 pl-0">
                                            <span class="box_input">
                                    <input class="form-control" placeholder="Trích dẫn yêu thích hoặc giới thiệu ngắn gọn về bản thân" name="data[contents]">
                                </span>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <h4 class="link_title text-lien-ket-mxh">Liên kết mạng xã hội</h4>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-4">
                                                <label>Facebook:</label>
                                            </div>
                                            <div class="col-sm-8 pl-0">
                                            <span class="box_input">
                                    <input class="form-control" placeholder="Nhập liên kết đến trang cá nhân của bạn" name="data[facebook_link]">
                                </span>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-4">
                                                <label>Youtube:</label>
                                            </div>
                                            <div class="col-sm-8 pl-0">
                                            <span class="box_input">
                                    <input class="form-control" placeholder="Nhập liên kết đến trang cá nhân của bạn" name="data[youtube_link]">
                                </span>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-4">
                                                <label>Instagram:</label>
                                            </div>
                                            <div class="col-sm-8 pl-0">
                                            <span class="box_input">
                                    <input class="form-control" placeholder="Nhập liên kết đến trang cá nhân của bạn" name="data[instagram_link]">
                                </span>
                                            </div>
                                        </div>
                                        <div id="wrap-guardian">
                                            <div class="row form-group">
                                                <h4 class="link_title text-nguoi-giam-ho">Nếu bạn chưa đủ 14 tuổi, vui lòng nhập thông tin của người giám hộ<br>
                                                    để tiếp tục sử dụng dịch vụ mạng xã hội Blog Radio</h4>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-sm-4">
                                                    <label>Họ tên người giám hộ:</label>
                                                </div>
                                                <div class="col-sm-8 pl-0">
                                                <span class="box_input">
                                    <input class="form-control" name="data[guardian_name]">
                                    <span class="error">*</span>
                                                </span>
                                                    <div class="validate-error-form" id="guardian-name-error"></div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-sm-4">
                                                    <label>Email xác nhận:</label>
                                                </div>
                                                <div class="col-sm-8 pl-0">
                                                <span class="box_input">
                                    <input class="form-control" name="data[guardian_email]">
                                    <span class="error">*</span>
                                                </span>
                                                    <div class="validate-error-form" id="guardian-email-error"></div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-sm-4">
                                                    <label style="line-height: 20px">Chứng minh nhân dân
                                                        <br> người giám hộ:</label>
                                                </div>
                                                <div class="col-sm-8 pl-0">
                                                <span class="box_input">
                                    <input class="form-control" name="data[guardian_cmnd]">
                                    <span class="error">*</span>
                                                </span>
                                                    <div class="validate-error-form" id="guardian-cmnd-error"></div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-sm-4">
                                                    <label style="line-height: 20px">Quan hệ nhân thân:</label>
                                                </div>
                                                <div class="col-sm-8 pl-0">
                                                    <div class="d-flex">
                                                    <span class="mr-15">
                                       <input id="father" type="radio" name="data[guardian_relation]" value="father" checked="">
                                        <label for="father">Bố</label>
                                    </span>
                                                        <span class="mr-15">
                                        <input id="mother" type="radio" name="data[guardian_relation]" value="mother">
                                        <label for="mother">Mẹ</label>
                                    </span>
                                                        <span>
                                        <input id="other_" type="radio" name="data[guardian_relation]">
                                        <label for="other_">Khác</label>
                                    </span>
                                                        <span class="box_input mx-10" style="top: -4px">
                                        <input class="form-control" type="text" placeholder="Ghi rõ" style="width: 100px;line-height: 30px;height: 30px">
                                    </span>
                                                        <span class="error" style="line-height: 30px">*</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row form-group mb-0">
                                                <h4 class="link_title_not_bold">Blog Radio sẽ gửi một email cho người giám hộ để xác nhận họ đồng ý<br>
                                                    việc bạn tham gia mạng xã hội blogradio.vn</h4>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-12 text-center">
                                                <input id="agree-form" type="checkbox" name="agree">
                                                <label for="agree-form">Tôi đồng ý với tất cả các điều khoản</label>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <h4 class="link_title_not_bold text-uppercase mb-0">
                                                Vui lòng đọc kỹ Điều khoản sử dụng Blog Radio tại đây .</h4>
                                        </div>
                                        <div class="row form-group text-center">
                                            <button class="btn_res">đăng ký</button>
                                        </div>
                                        <p class="btn_guide text-center">
                                            <a href="https://blogradio.vn/huong-dan-tao-tai-khoan-va-dang-bai-len-blogradiovn-phien-ban-2019-nw206322.html"><img src="/frontend_res/assets/img/icon_guide.png"> XEM HƯỚNG DẪN TẠO TÀI KHOẢN VÀ GỬI BÀI</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                    <div class="box-ads text-center mt-20">
                        <a href="#"><img src="/frontend_res/assets/img/banner2.png"></a>
                    </div>

                    <div class="box-social text-center hidden-xs">
                    <span class="clearfix">
                        <a href="https://www.facebook.com/yeublogviet" target="_blank"><img src="/frontend_res/assets/img/svg/icon-facebook.svg"></a>
                        <a href="https://www.youtube.com/channel/UCIAl0wSSaDG-8c5pNaZN00g" target="_blank"><img src="/frontend_res/assets/img/svg/icon-youtube.svg"></a>
                        <a href="https://www.instagram.com/yeublogradio/" target="_blank"><img src="/frontend_res/assets/img/svg/icon-insta.svg"></a>

                    </span>

                    </div>
                    <div class="text-center hidden-xs">
                        <script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-4570899516704798" data-ad-slot="9638942264"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>

                    </div>
                </div>
                <script src="/public/frontend_res/assets/custom/js/user.js"></script>
                <div class="col-sm-4 box-right">
                    <aside class="hidden-xs" style="">
                        <a class="guide_post" href="https://blogradio.vn/huong-dan-tao-tai-khoan-va-dang-bai-len-blogradiovn-phien-ban-2019-nw206322.html"><img src="/frontend_res/assets/img/icon_guide.png"> Hướng dẫn gửi bài</a>
                        <h3 class="text-center title-aside">Đăng nhập</h3>
                        <form class="form_login" action="/dang-nhap.html" method="post">
                            <input type="hidden" name="cDlYM09Dd0kvQWJJbVFoNHdLbmdMdz09" value="MWRKRXVZK0lTV0c4ZXJNYktVWklVQT09">
                            <input type="hidden" name="back_url" value="https://blogradio.vn/dang-ky.html">
                            <input class="form-control" placeholder="EMAIL" name="email" value="">
                            <input class="form-control" placeholder="PASSWORD" name="password" type="password" value="">
                            <div class="login_social">
                                <p>
                                    <a href="javascript:void(0)" class="login-facebook"><span><img src="/frontend_res/assets/img/fb1.png"></span></a>

                                    <span>OR</span>
                                    <a href="javascript:void(0)" class="login-google"><span><img src="/frontend_res/assets/img/gplus1.png"></span></a>
                                </p>
                            </div>

                            <div class="form_button clearfix">
                                <a href="#">
                                    <button class="pull-left">ĐĂNG NHẬP</button>
                                </a>
                                <a href="/dang-ky.html">
                                    <button class="pull-right" type="button">ĐĂNG KÝ</button>
                                </a>
                            </div>
                            <div class="forgot form-group mb-0">
                                <p>
                                    <input type="checkbox" id="remember" name="remember" value="1">
                                    <label for="remember"> ghi nhớ mật khẩu</label>
                                </p>

                                <p><a href="/quen-mat-khau.html">QUÊN MẬT KHẨU</a></p>
                                <br>
                                <p><a href="/gui-yeu-cau-kich-hoat-tai-khoan.html">GỬI YÊU CẦU KÍCH HOẠT TÀI KHOẢN</a></p>
                            </div>
                        </form>
                    </aside>

                    <aside class="action_sociali">
                        <a href="https://play.google.com/store/books/author?id=BlogRadio"><img src="frontend_res/assets/img/bannerphai_ipub_googleplay.gif"></a>
                    </aside>

                    <aside class="action_social">
                        <h3 class="text-center title-aside"><a href="javascript:void(0)">TƯƠNG TÁC XÃ HỘI1</a></h3>
                        <p class="social_act">
                            <a href="https://www.facebook.com/yeublogviet"><img src="/frontend_res/assets/img/svg/icon-facebook-s.svg"></a>
                            <a href="https://www.youtube.com/channel/UCIAl0wSSaDG-8c5pNaZN00g"><img src="/frontend_res/assets/img/svg/icon-youtube-s.svg"></a>
                            <a href="javascript:void(0);"><img src="/frontend_res/assets/img/svg/icon-insta-s.svg"></a>

                        </p>
                        <div>
                            <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/yeublogviet/" data-tabs="timeline" data-height="210" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=466991717375914&amp;container_width=288&amp;height=210&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fyeublogviet%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline"><span style="vertical-align: bottom; width: 288px; height: 210px;"><iframe name="f1b26f4500dd0b" width="1000px" height="210px" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v3.2/plugins/page.php?adapt_container_width=true&amp;app_id=466991717375914&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D44%23cb%3Dfc88c76a5e827c%26domain%3Dblogradio.vn%26origin%3Dhttps%253A%252F%252Fblogradio.vn%252Ff60f5879c95f9c%26relation%3Dparent.parent&amp;container_width=288&amp;height=210&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fyeublogviet%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline" style="border: none; visibility: visible; width: 288px; height: 210px;" class=""></iframe></span></div>
                        </div>
                        <div class="hidden-xs">

                        </div>

                        <a href="http://feedburner.google.com/fb/a/mailverify?uri=Blogviet&amp;loc=en_US" target="_blank"><img src="/frontend_res/assets/img/svg/button-dang-ky-email.svg" alt=""></a>

                    </aside>

                    <div class="banner_ads hidden-xs">

                        <a href=""><img src=""></a>
                    </div>

                    <aside class="tabs_side">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item active">
                                <a class="nav-link active" data-toggle="tab" href="#sound">NGHE NHIỀU</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " data-toggle="tab" href="#read">Đọc nhiều</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div id="sound" class="tab-pane active">
                                <a href="https://blogradio.vn/chi-can-biet-dung-mot-thu-chung-ta-se-co-cuoc-song-an-nhien-den-het-doi-md9037.html"><img src="https://blogradio.vn/uploads/image/2019/11/25/0668dc4895b0ef57f96d154169426174_chicanbietdungmotthu1.jpg" alt="Chỉ cần biết đúng một thứ, chúng ta sẽ có cuộc sống an nhiên đến hết đời" title="Chỉ cần biết đúng một thứ, chúng ta sẽ có cuộc sống an nhiên đến hết đời" class="img-responsive" style="width: 100%;height: 190px;"></a>
                                <ul class="box_list_tabs">
                                    <li>
                                        <a href="https://blogradio.vn/chi-can-biet-dung-mot-thu-chung-ta-se-co-cuoc-song-an-nhien-den-het-doi-md9037.html">Chỉ cần biết đúng một thứ, chúng ta sẽ có cuộc sống an nhiên đến hết đời</a>
                                        <p>2019-11-25 01:05:00</p>
                                    </li>
                                    <li>
                                        <a href="https://blogradio.vn/3-su-that-phu-phang-nhung-nguoi-qua-tuoi-30-can-thau-to-truoc-khi-qua-muon-md9010.html">3 sự thật phũ phàng những người qua tuổi 30 cần thấu tỏ trước khi quá muộn</a>
                                        <p>2019-11-04 01:05:00</p>
                                    </li>
                                    <li>
                                        <a href="https://blogradio.vn/replay-blog-radio-tinh-yeu-thi-khong-co-sai-hoac-dung-md9007.html">Replay Blog Radio: Tình yêu thì không có Sai hoặc Đúng</a>
                                        <p>2019-11-01 10:20:08</p>
                                    </li>
                                    <li>
                                        <a href="https://blogradio.vn/10-chan-ly-song-tham-thuy-tu-dong-vat-ai-cung-nen-doc-mot-lan-trong-doi-cafe-vlog-md9015.html">10 chân lý sống thâm thúy từ động vật ai cũng nên đọc một lần trong đời (Cafe Vlog)</a>
                                        <p>2019-11-07 01:05:00</p>
                                    </li>
                                    <li>
                                        <a href="https://blogradio.vn/blog-radio-624-noi-ay-quang-may-noi-nay-tuyet-do-md9009.html">Blog Radio 624: Nơi ấy quang mây, nơi này tuyết đổ</a>
                                        <p>2019-11-02 00:01:00</p>
                                    </li>
                                    <li>
                                        <a href="https://blogradio.vn/blog-radio-627-thoi-gian-da-mang-di-thu-gi-md9036.html">Blog Radio 627: Thời gian đã mang đi thứ gì?</a>
                                        <p>2019-11-23 00:01:00</p>
                                    </li>
                                    <li>
                                        <a href="https://blogradio.vn/blog-radio-625-bo-lai-em-nhung-ngay-thang-choi-voi-md9018.html">Blog Radio 625: Bỏ lại em những ngày tháng chơi vơi</a>
                                        <p>2019-11-09 00:01:00</p>
                                    </li>
                                </ul>
                            </div>
                            <div id="read" class=" tab-pane fade ">
                                <a href="https://blogradio.vn/nhung-cau-thinh-danh-cho-hoi-fa-lau-nam-dam-bao-tha-dau-dinh-day-nw224948.html"><img src="https://blogradio.vn/uploads/image/2019/11/04/27c014842babdbc69e4668169d48736a_thinh.jpg" title="Những câu 'thính' dành cho hội FA lâu năm, đảm bảo thả đâu dính đấy" alt="Những câu 'thính' dành cho hội FA lâu năm, đảm bảo thả đâu dính đấy" class="img-responsive" style="width: 100%;height: 190px"></a>
                                <ul class="box_list_tabs">
                                    <li>
                                        <a href="https://blogradio.vn/nhung-cau-thinh-danh-cho-hoi-fa-lau-nam-dam-bao-tha-dau-dinh-day-nw224948.html">Những câu 'thính' dành cho hội FA lâu năm, đảm bảo thả đâu dính đấy</a>
                                        <p>2019-11-04 01:25:00</p>
                                    </li>
                                    <li>
                                        <a href="https://blogradio.vn/xem-tuong-dan-ong-qua-khuon-mat-du-doan-chinh-xac-duoc-tuong-lai-nw225075.html">Xem tướng đàn ông qua khuôn mặt dự đoán chính xác được tương lai</a>
                                        <p>2019-11-12 01:30:00</p>
                                    </li>
                                    <li>
                                        <a href="https://blogradio.vn/ai-sinh-vao-thang-am-lich-sau-chuan-bi-don-tin-vui-don-dap-trong-nam-2020-nw225202.html">Ai sinh vào tháng âm lịch sau chuẩn bị đón tin vui dồn dập trong năm 2020</a>
                                        <p>2019-11-27 01:27:00</p>
                                    </li>
                                    <li>
                                        <a href="https://blogradio.vn/4-cung-hoang-dao-cuc-ky-quyen-ru-khien-doi-phuong-khong-the-roi-mat-nw224992.html">4 cung hoàng đạo cực kỳ quyến rũ khiến đối phương không thể rời mắt</a>
                                        <p>2019-11-09 01:25:00</p>
                                    </li>
                                    <li>
                                        <a href="https://blogradio.vn/nam-2020-mang-lai-may-man-cho-nhung-con-giap-nao-nw225158.html">Năm 2020 mang lại may mắn cho những con giáp nào?</a>
                                        <p>2019-11-22 01:27:00</p>
                                    </li>
                                    <li>
                                        <a href="https://blogradio.vn/3-con-giap-an-nen-lam-ra-tien-bac-rung-rinh-tu-gio-den-tet-nguyen-dan-2020-nw225203.html">3 con giáp ăn nên làm ra, tiền bạc rủng rỉnh từ giờ đến Tết Nguyên Đán 2020</a>
                                        <p>2019-11-24 01:25:00</p>
                                    </li>
                                    <li>
                                        <a href="https://blogradio.vn/4-cung-hoang-dao-di-dau-cung-duoc-yeu-quy-vi-kheo-leo-thong-minh-nw224929.html">4 cung hoàng đạo đi đâu cũng được yêu quý vì khéo léo, thông minh</a>
                                        <p>2019-11-07 01:22:00</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </aside>

                    <script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- New - Chuyên mục 2.1 -->
                    <ins class="adsbygoogle" style="display:inline-block;width:336px;height:280px" data-ad-client="ca-pub-4570899516704798" data-ad-slot="1726579069"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                    <aside class="auth_feature">
                        <h3 class="text-center title-aside mt-0">
                            <a href="/tac-gia.html">TÁC GIẢ TIÊU BIỂU</a>
                        </h3>
                        <ul>
                            <li class="clearfix">
                                <a href="https://blogradio.vn/thanh-vien/vu-phuong-duyen/18874">
                                    <img src="https://blogradio.vn/uploads/image/2019/04/05/26f48f9c24ad7a260d6138dd7a00723f_42374659-704568089899232-2515382252993511424-n-fotor.jpg" alt="Vũ Phương Duyên" title="Vũ Phương Duyên" style="height: 97px;">
                                </a>
                                <div class="box_auth">
                                    <h3><a href="https://blogradio.vn/thanh-vien/vu-phuong-duyen/18874">Vũ Phương Duyên</a></h3>
                                    <p>
                                        Chẳng buộc được gió, chẳng buộc được mây, chẳng buộc được tháng ngày ở bên đầy hứa hẹn. Chẳng thể bảo quên, chẳng thể thôi nhớ, chẳng thể kéo mình trở lại như xưa... </p>
                                </div>
                            </li>
                            <li class="clearfix">
                                <a href="https://blogradio.vn/thanh-vien/vu/9407">
                                    <img src="https://blogradio.vn/uploads/image/2019/05/08/28bd60bf5fc223314da4ad7b685ac17f_59706300-823495234683434-4189772946941673472-n.jpg" alt="Vũ " title="Vũ " style="height: 97px;">
                                </a>
                                <div class="box_auth">
                                    <h3><a href="https://blogradio.vn/thanh-vien/vu/9407">Vũ </a></h3>
                                    <p>
                                        Tôi cứ nghĩ yêu là để hạnh phúc! </p>
                                </div>
                            </li>
                            <li class="clearfix">
                                <a href="https://blogradio.vn/thanh-vien/vi-thanh-hoang/19210">
                                    <img src="https://blogradio.vn/thumbs/hoanghuy/2018/08/01/8125d4c90afbe583dc96db4c3ec76587_21463281_1129441520519926_4402850763879251256_n.jpg" alt="Vi Thanh Hoàng" title="Vi Thanh Hoàng" style="height: 97px;">
                                </a>
                                <div class="box_auth">
                                    <h3><a href="https://blogradio.vn/thanh-vien/vi-thanh-hoang/19210">Vi Thanh Hoàng</a></h3>
                                    <p>
                                        Đối với tôi thơ là bạn. Làm thơ để giảm căng thẳng sau giờ làm việc. Thơ đến với tôi tự nhiên không chút gượng ép ,không một thỏa thỏa thuận ràng buộc nào... </p>
                                </div>
                            </li>
                            <li class="clearfix">
                                <a href="https://blogradio.vn/thanh-vien/tam-di/2116">
                                    <img src="https://blogradio.vn/thumbs/hoanghuy/2018/05/23/f892ccc365fc33dcc535aa31ebf13f11_31-cau-noi-hay1.jpg" alt="Tâm Di" title="Tâm Di" style="height: 97px;">
                                </a>
                                <div class="box_auth">
                                    <h3><a href="https://blogradio.vn/thanh-vien/tam-di/2116">Tâm Di</a></h3>
                                    <p>
                                        Cứ đi rồi sẽ đến! </p>
                                </div>
                            </li>
                            <li class="clearfix">
                                <a href="https://blogradio.vn/thanh-vien/le-thanh-ngoc/866">
                                    <img src="https://blogradio.vn/uploads/image/2019/06/01/14b1dfd0d78959b6ec7416bedf4e2e3c_img-1558794548881-1558794618823.jpg" alt="Lê Thành Ngọc" title="Lê Thành Ngọc" style="height: 97px;">
                                </a>
                                <div class="box_auth">
                                    <h3><a href="https://blogradio.vn/thanh-vien/le-thanh-ngoc/866">Lê Thành Ngọc</a></h3>
                                    <p>
                                        Cuộc sống là những vệt màu nham nhở </p>
                                </div>
                            </li>
                            <li class="clearfix">
                                <a href="https://blogradio.vn/thanh-vien/phuong-tram-sau-dong/191">
                                    <img src="https://blogradio.vn/uploads/image/2019/04/26/b915ba7f4a25496fc4d766c141e1e701_49204716-1937069543076997-8717750834454069248-n.jpg" alt="Phương Trâm (Sầu Đông)" title="Phương Trâm (Sầu Đông)" style="height: 97px;">
                                </a>
                                <div class="box_auth">
                                    <h3><a href="https://blogradio.vn/thanh-vien/phuong-tram-sau-dong/191">Phương Trâm (Sầu Đông)</a></h3>
                                    <p>
                                        Chỉ là bỗng dưng em thấy cô đơnGiữa phố xá thênh thang đông như hộiDòng người ấy vẫn bước qua rất vộiMột nửa cuộc đời ta để lại nơi đâu? </p>
                                </div>
                            </li>
                        </ul>
                    </aside>
                    <div class="box-social text-center hidden-sm hidden-lg hidden-md">
                    <span class="clearfix">
                         <a href="https://www.facebook.com/yeublogviet"><img src="/frontend_res/assets/img/svg/icon-facebook.svg"></a>
                        <a href="https://www.youtube.com/channel/UCIAl0wSSaDG-8c5pNaZN00g"><img src="/frontend_res/assets/img/svg/icon-youtube.svg"></a>
                        <a href="https://www.instagram.com/yeublogradio/"><img src="/frontend_res/assets/img/svg/icon-insta.svg"></a>
                    </span>

                    </div>
                </div>
                <input type="hidden" id="login-facebook-link" value="https://blogradio.vn/dang-nhap-facebook">
                <input type="hidden" id="login-google-link" value="https://blogradio.vn/dang-nhap-google">
            </div>
        </div>
    </div>
@stop
