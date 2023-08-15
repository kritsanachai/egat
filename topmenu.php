<!DOCTYPE html>
<html lang="en">
<body>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <link type="text/css" rel="stylesheet" href="https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.css" />
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.min.js"></script>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue-highcharts@0.1/dist/vue-highcharts.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
        <title>Dashboard</title>
    </head>
    <style>
        body {
            font-family: 'Kanit', sans-serif;
        }
        p {

            font-size: 18px;
        }
        h5 {
            text-align: center;
            margin-top: auto;
            padding: 5px;
            font-size: 30px;
            font-weight: bold;
        }
    </style>
    <div class="container-fluid">
        <div class="card-deck text-center">

            <!------------------- Box 1 --------------------------->
            <div class="gy-3 my-3 col-sm-12 col-md-6 col-lg-4">
                <div class="card shadow h-100">
                    <div class="card-header bg-warning "></div>
                    <div class="card-body">
                        <h5 class="card-title"> ระเบียบ คำสั่ง ประกาศ กฟผ. </h5> <!-------- บรรทัดนี้ ใช้ในการแสดงหัวข้อ (Title) ---------->
                        <p class="text-muted"> คำสั่ง กฟผ. ด้านความปลอดภัย,  นโยบายทรัพยากรบุคคล กฟผ.</p><!-------- บรรทัดนี้ ใช้ในการแสดงรายละเอียด (Desciption) ---------->
                    </div>
                    <div class="card-footer "><a class="btn btn-light" href="https://ssdd.egat.co.th/2566/index.php/m-%E0%B8%AA%E0%B8%A0%E0%B8%B2%E0%B8%9E%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%88%E0%B8%A3%E0%B8%B2%E0%B8%88%E0%B8%A3/%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%9A%E0%B8%B5%E0%B8%A2%E0%B8%9A%E0%B9%81%E0%B8%A5%E0%B8%B0%E0%B8%84%E0%B8%B3%E0%B8%AA%E0%B8%B1%E0%B9%88%E0%B8%87-%E0%B8%81%E0%B8%9F%E0%B8%9C-%E0%B8%94%E0%B9%89%E0%B8%B2%E0%B8%99%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%A0%E0%B8%B2%E0%B8%9E-%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%9B%E0%B8%A5%E0%B8%AD%E0%B8%94%E0%B8%A0%E0%B8%B1%E0%B8%A2-%E0%B9%81%E0%B8%A5%E0%B8%B0%E0%B8%A3%E0%B8%B1%E0%B8%81%E0%B8%A9%E0%B8%B2%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%9B%E0%B8%A5%E0%B8%AD%E0%B8%94%E0%B8%A0%E0%B8%B1%E0%B8%A2" target="_blank">ดูรายละเอียด <i class="fas fa-link"></i></a></div><!-------- บรรทัดนี้ ใช้ใน Link ไปหน้าที่ต้องการให้แสดงผล สมารถเปลี่ยนได้ ใน href="??????????" ---------->
                </div>
            </div>
            <!------------------- Box 1 --------------------------->


            <!------------------- Box 2 --------------------------->
            <div class="gy-3 my-3 col-sm-12 col-md-6 col-lg-4">
                <div class="card shadow h-100">
                    <div class="card-header bg-danger "></div>
                    <div class="card-body">
                        <h5 class="card-title"> ระเบียบคำสั่งประกาศ จปภ. </h5><!-------- บรรทัดนี้ ใช้ในการแสดงหัวข้อ (Title) ---------->
                        <p class="text-muted"> คำสั่งเจ้าหน้าที่ควบคุมการรักษาความปลอดภัย, ประกาศผู้รักษาบริเวณสำนักงานกลาง กฟผ., ประกาศเจ้าหน้าที่ควบคุมการรักษาความปลอดภัย</p><!-------- บรรทัดนี้ ใช้ในการแสดงรายละเอียด (Desciption) ---------->
                    </div>
                    <div class="card-footer"><a class="btn btn-light" href="https://ssdd.egat.co.th/2566/index.php/m-%E0%B8%AA%E0%B8%A0%E0%B8%B2%E0%B8%9E%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%88%E0%B8%A3%E0%B8%B2%E0%B8%88%E0%B8%A3/%E0%B8%84%E0%B8%B3%E0%B8%AA%E0%B8%B1%E0%B9%88%E0%B8%87-%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B8%81%E0%B8%B2%E0%B8%A8-%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B8%AD%E0%B8%AD%E0%B8%81%E0%B9%82%E0%B8%94%E0%B8%A2-%E0%B8%88%E0%B8%9B%E0%B8%A0-%E0%B9%81%E0%B8%A5%E0%B8%B0-%E0%B8%9C%E0%B8%B9%E0%B9%89%E0%B8%A3%E0%B8%B1%E0%B8%81%E0%B8%A9%E0%B8%B2%E0%B8%9A%E0%B8%A3%E0%B8%B4%E0%B9%80%E0%B8%A7%E0%B8%93" target="_blank">ดูรายละเอียด <i class="fas fa-link"></i></a></div><!-------- บรรทัดนี้ ใช้ใน Link ไปหน้าที่ต้องการให้แสดงผล สมารถเปลี่ยนได้ ใน href="??????????" ---------->
                </div>
            </div>
            <!------------------- Box 2 --------------------------->


            <!------------------- Box 3 --------------------------->
            <div class="gy-3 my-3 col-sm-12 col-md-6 col-lg-4">
                <div class="card shadow h-100">
                    <div class="card-header bg-success "></div>
                    <div class="card-body">
                        <h5 class="card-title"> สื่อส่งเสริมความปลอดภัย </h5><!-------- บรรทัดนี้ ใช้ในการแสดงหัวข้อ (Title) ---------->
                        <p class="text-muted">งานตรวจประเมิน (Audit), ข้อมูลสำหรับ Auditor, ข้อมูลสำหรับหน่วยงานรับตรวจ</p><!-------- บรรทัดนี้ ใช้ในการแสดงรายละเอียด (Desciption) ---------->
                    </div>
                    <div class="card-footer"><a class="btn btn-light" href="https://ssdd.egat.co.th/2566/index.php/pr-news/39-news-2565/235-%E0%B8%84%E0%B8%A5%E0%B8%B4%E0%B8%9B%E0%B8%A7%E0%B8%B5%E0%B8%94%E0%B8%B5%E0%B9%82%E0%B8%AD%E0%B8%AA%E0%B9%88%E0%B8%87%E0%B9%80%E0%B8%AA%E0%B8%A3%E0%B8%B4%E0%B8%A1%E0%B8%A7%E0%B8%B1%E0%B8%92%E0%B8%99%E0%B8%98%E0%B8%A3%E0%B8%A3%E0%B8%A1%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%9B%E0%B8%A5%E0%B8%AD%E0%B8%94%E0%B8%A0%E0%B8%B1%E0%B8%A2-%E0%B8%9E-%E0%B8%A2-2565" target="_blank">ดูรายละเอียด <i class="fas fa-link"></i></a></div><!-------- บรรทัดนี้ ใช้ใน Link ไปหน้าที่ต้องการให้แสดงผล สมารถเปลี่ยนได้ ใน href="??????????" ---------->
                </div>
            </div>
            <!------------------- Box 3 --------------------------->


            <!------------------- Box 4 --------------------------->
            <div class="gy-3 my-3 col-sm-12 col-md-6 col-lg-4">
                <div class="card shadow h-100">
                    <div class="card-header bg-primary "></div>
                    <div class="card-body">
                        <h5 class="card-title"> incident management </h5><!-------- บรรทัดนี้ ใช้ในการแสดงหัวข้อ (Title) ---------->
                        <p class="text-muted"> อยู่ระหว่างดำเนินการ</p><!-------- บรรทัดนี้ ใช้ในการแสดงรายละเอียด (Desciption) ---------->
                    </div>
                    <div class="card-footer"><a class="btn btn-light" href="#" target="_blank">ดูรายละเอียด <i class="fas fa-link"></i></a></div><!-------- บรรทัดนี้ ใช้ใน Link ไปหน้าที่ต้องการให้แสดงผล สมารถเปลี่ยนได้ ใน href="??????????" ---------->
                </div>
            </div>
            <!------------------- Box 4 --------------------------->

            <!------------------- Box 5 --------------------------->
            <div class="gy-3 my-3 col-sm-12 col-md-6 col-lg-4">
                <div class="card shadow h-100">
                    <div class="card-header bg-warning "></div>
                    <div class="card-body">
                        <h5 class="card-title"> ระบบขออนุญาต </h5><!-------- บรรทัดนี้ ใช้ในการแสดงหัวข้อ (Title) ---------->
                        <p class="text-muted">สำรองที่จอดรถ, ทำบัตรแสดงตน, ทำบัตรอนุญาตติดรถยนต์, ขออนุญาตนำของออก, ขอตรวจสอบกล้อง CCTV</p><!-------- บรรทัดนี้ ใช้ในการแสดงรายละเอียด (Desciption) ---------->
                    </div>
                    <div class="card-footer"><a class="btn btn-light" href="https://ssdd.egat.co.th/2566/index.php/m-%E0%B8%87%E0%B8%B2%E0%B8%99%E0%B8%9A%E0%B8%A3%E0%B8%B4%E0%B8%81%E0%B8%B2%E0%B8%A3/%E0%B8%A3%E0%B8%B0%E0%B8%9A%E0%B8%9A%E0%B8%87%E0%B8%B2%E0%B8%99-non-it-%E0%B9%81%E0%B8%A2%E0%B8%81%E0%B8%95%E0%B8%B2%E0%B8%A1%E0%B8%81%E0%B8%AD%E0%B8%87/%E0%B8%81%E0%B8%9B%E0%B8%9B-%E0%B8%AB" target="_blank">ดูรายละเอียด <i class="fas fa-link"></i></a></div><!-------- บรรทัดนี้ ใช้ใน Link ไปหน้าที่ต้องการให้แสดงผล สมารถเปลี่ยนได้ ใน href="??????????" ---------->
                </div>
            </div>
            <!------------------- Box 5 --------------------------->

            <!------------------- Box 6 --------------------------->
            <div class="gy-3 my-3 col-sm-12 col-md-6 col-lg-4">
                <div class="card shadow h-100">
                    <div class="card-header bg-danger "></div>
                    <div class="card-body">
                        <h5 class="card-title"> คปอ. สนญ. </h5><!-------- บรรทัดนี้ ใช้ในการแสดงหัวข้อ (Title) ---------->
                        <p class="text-muted">งานคปอ. สนญ.</p><!-------- บรรทัดนี้ ใช้ในการแสดงรายละเอียด (Desciption) ---------->
                    </div>
                    <div class="card-footer"><a class="btn btn-light" href="http://ohsec.egat.co.th/" target="_blank">ดูรายละเอียด <i class="fas fa-link"></i></a></div><!-------- บรรทัดนี้ ใช้ใน Link ไปหน้าที่ต้องการให้แสดงผล สมารถเปลี่ยนได้ ใน href="??????????" ---------->
                </div>
            </div>
            <!------------------- Box 6 --------------------------->

        </div>

        <!-- <div class="card-deck text-center mt-4">
            <div class="card shadow">
                <div class="card-header" style="background-color: mediumpurple;"></div>
                <div class="card-body">
                    <h5 class="card-title">งานวินัยและกิจการสัมพันธ์</h5>
                    <small class="text-muted">อุทาหรณ์ก่อนทำผิด , เงินทดแทนน่ารู้ , ระบบงานวินัยและกิจการสัมพันธ์</small>
                </div>
                <div class="card-footer"><a class="btn btn-light" href="http://hr.egat.co.th/index.php/hr-rerat-m" target="_blank">ดูรายละเอียด <i class="fas fa-link"></i></a></div>
            </div>
            <div class="card shadow">
                <div class="card-header bg-primary "></div>
                <div class="card-body">
                    <h5 class="card-title">งานกลยุทธ์และพัฒนาองค์การ</h5>
                    <small class="text-muted">โครงสร้างองค์การ / โครงการ , ระบบงานกลยุทธ์และพัฒนาองค์การ , ค่านิยมฯ (SPEED) และความผูกพัน , ตำแหน่งงานและสายอาชีพ</small>
                </div>
                <div class="card-footer"><a class="btn btn-light" href="http://hr.egat.co.th/index.php/hr-strategy" target="_blank">ดูรายละเอียด <i class="fas fa-link"></i></a></div>
            </div>
            <div class="card shadow">
                <div class="card-header" style="background-color: cadetblue;"></div>
                <div class="card-body">
                    <h5 class="card-title">งานบริหารทรัพยากรบุคคลสายงาน</h5>
                    <small class="text-muted">ระบบงานบริหารทรัพยากรบุคคล , HR Process Forum , ระเบียบและข้อหารือ</small>
                </div>
                <div class="card-footer"><a class="btn btn-light" href="http://hr.egat.co.th/index.php/hr-process-forum" target="_blank">ดูรายละเอียด <i class="fas fa-link"></i></a></div>
            </div>
        </div> -->
    </div>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-vue/2.21.2/bootstrap-vue.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.23.0/locale/th.js"></script>


</body>

</html>