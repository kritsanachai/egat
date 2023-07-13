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
            <div class="gy-3 my-3 col-sm-12 col-md-6 col-lg-6">
                <div class="card shadow">
                    <div class="card-header bg-warning "></div>
                    <div class="card-body">
                        <h5 class="card-title">กสคป-ห. </h5> <!-------- บรรทัดนี้ ใช้ในการแสดงหัวข้อ (Title) ---------->
                        <p class="text-muted">งานตรวจวัดด้านความปลอดภัย, งานส่งเสริมความปลอดภัย, งานตรวจวัดสภาพแวดล้อมในการทำงาน, งานอบรมความปลอดภัย</p><!-------- บรรทัดนี้ ใช้ในการแสดงรายละเอียด (Desciption) ---------->
                    </div>
                    <div class="card-footer "><a class="btn btn-light" href="#" target="_blank">ดูรายละเอียด <i class="fas fa-link"></i></a></div><!-------- บรรทัดนี้ ใช้ใน Link ไปหน้าที่ต้องการให้แสดงผล สมารถเปลี่ยนได้ ใน href="??????????" ---------->
                </div>
            </div>
            <!------------------- Box 1 --------------------------->


            <!------------------- Box 2 --------------------------->
            <div class="gy-3 my-3 col-sm-12 col-md-6 col-lg-6">
                <div class="card shadow">
                    <div class="card-header bg-danger "></div>
                    <div class="card-body">
                        <h5 class="card-title">กปป-ห. </h5><!-------- บรรทัดนี้ ใช้ในการแสดงหัวข้อ (Title) ---------->
                        <p class="text-muted">งานบริการรักษาความปลอดภัย, งานบัตรแสดงตน, บัตรอนุญาตติดรถยนต์, กล้องโทรทัศน์วงจรปิด, ขอที่จอดรถยนต์</p><!-------- บรรทัดนี้ ใช้ในการแสดงรายละเอียด (Desciption) ---------->
                    </div>
                    <div class="card-footer"><a class="btn btn-light" href="#" target="_blank">ดูรายละเอียด <i class="fas fa-link"></i></a></div><!-------- บรรทัดนี้ ใช้ใน Link ไปหน้าที่ต้องการให้แสดงผล สมารถเปลี่ยนได้ ใน href="??????????" ---------->
                </div>
            </div>
            <!------------------- Box 2 --------------------------->


            <!------------------- Box 3 --------------------------->
            <div class="gy-3 my-3 col-sm-12 col-md-6 col-lg-6">
                <div class="card shadow">
                    <div class="card-header bg-success "></div>
                    <div class="card-body">
                        <h5 class="card-title">กกคป-ห.</h5><!-------- บรรทัดนี้ ใช้ในการแสดงหัวข้อ (Title) ---------->
                        <p class="text-muted">งานตรวจประเมิน (Audit), ข้อมูลสำหรับ Auditor, ข้อมูลสำหรับหน่วยงานรับตรวจ</p><!-------- บรรทัดนี้ ใช้ในการแสดงรายละเอียด (Desciption) ---------->
                    </div>
                    <div class="card-footer"><a class="btn btn-light" href="#" target="_blank">ดูรายละเอียด <i class="fas fa-link"></i></a></div><!-------- บรรทัดนี้ ใช้ใน Link ไปหน้าที่ต้องการให้แสดงผล สมารถเปลี่ยนได้ ใน href="??????????" ---------->
                </div>
            </div>
            <!------------------- Box 3 --------------------------->


            <!------------------- Box 4 --------------------------->
            <div class="gy-3 my-3 col-sm-12 col-md-6 col-lg-6">
                <div class="card shadow">
                    <div class="card-header bg-primary "></div>
                    <div class="card-body">
                        <h5 class="card-title">กวปส-ห.</h5><!-------- บรรทัดนี้ ใช้ในการแสดงหัวข้อ (Title) ---------->
                        <p class="text-muted">งานบริหารความเสี่ยงด้านปฏิบัติการ, งานบริหารระบบความต่อเนื่องทางธุรกิจ</p><!-------- บรรทัดนี้ ใช้ในการแสดงรายละเอียด (Desciption) ---------->
                    </div>
                    <div class="card-footer"><a class="btn btn-light" href="#" target="_blank">ดูรายละเอียด <i class="fas fa-link"></i></a></div><!-------- บรรทัดนี้ ใช้ใน Link ไปหน้าที่ต้องการให้แสดงผล สมารถเปลี่ยนได้ ใน href="??????????" ---------->
                </div>
            </div>
            <!------------------- Box 4 --------------------------->


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