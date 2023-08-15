<!DOCTYPE html>
<html lang="en">

<body>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
            integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <link type="text/css" rel="stylesheet" href="https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.css" />
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
            integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
            crossorigin="anonymous" />
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.min.js"></script>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue-highcharts@0.1/dist/vue-highcharts.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
        </script>
        <title>Dashboard</title>
    </head>
    <style>
    table {
        font-family: 'Kanit', sans-serif;
        width: 1300px;
    }

    p {

        font-size: 18px;
    }

    h5 {
        text-align: center;
        margin-top: auto;
        padding: 5px;
        font-
    }
    hr{
        border: 3px solid blue;
        border-radius: 5px;
    }
    </style>
    <hr>
    <table>
        <tbody>
            <tr>
                <td><span>งานตรวจประเมินระบบความปลอดภัย</span></td>
                <td style="text-align: left;"><span>&nbsp;65022</span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td><span>แจ้งเหตุด่วน/เหตุร้าย</span></td>
                <td style="text-align: left;"><span>&nbsp;191, 64260</span></td>
            </tr>
            <tr>
                <td><span>งานควบคุมความสูญเสีย</spa></td>
                <td style="text-align: left;"><span>&nbsp;65031</span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td><span>บัตรแสดงตนผู้ปฏิบัติงาน/บัตรอนุญาตติดรถยนต์</span></td>
                <td style="text-align: left;"><span>&nbsp;64222, 64225</span></td>
            </tr>
            <tr>
                <td><span>วิศวกรรมความปลอดภัยและอัคคีภัย</span></td>
                <td style="text-align: left;"><span>&nbsp;65033</span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td><span>งานระบบไม้กั้นรถขึ้นอาคาร</span></td>
                <td style="text-align: left;"><span>&nbsp;64215, 64278</span></td>
            </tr>
            <tr>
                <td><span>บริหารความต่อเนื่องทางธุรกิจ</span></td>
                <td style="text-align: left;"><span>&nbsp;65033</span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td><span>งานลงทะเบียนบัตรแสดงตน</span></td>
                <td style="text-align: left;"><span>&nbsp;64222</span></td>
            </tr>
            <tr>
                <td><span>งานส่งเสริมและอบรมด้านความปลอดภัย</span></td>
                <td style="text-align: left;"><span>&nbsp;65041</span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td><span>ขอที่จอดรถบุคคลภายนอก</span></td>
                <td style="text-align: left;"><span>&nbsp;64242</span></td>
            </tr>
            <tr>
                <td><span>คปอ. สนญ.</span></td>
                <td style="text-align: left;"><span>&nbsp;65042</span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td><span>ขอจอดรถค้างคืนภายใน กฟผ.</span></td>
                <td style="text-align: left;"><span>&nbsp;64278</span></td>
            </tr>
            <tr>
                <td><span>อุปกรณ์คุ้มครองความปลอดภัยส่วนบุคคล PPE</span></td>
                <td style="text-align: left;"><span>&nbsp;65042</span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td style="text-align: left;"><span></span></td>
            </tr>
            <tr>
                <td><span>งานตรวจวัดสุขศาสตร์อุตสาหกรรม</span></td>
                <td style="text-align: left;"><span>&nbsp;65043</span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td style="text-align: left;"><span></span></td>
            </tr>
            <tr>
                <td><span>EGAT QSHE</span></td>
                <td style="text-align: left;"><span>&nbsp;65052</span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td style="text-align: left;"><span></span></td>
            </tr>
        </tbody>
    </table>
    <p>&nbsp;</p>
    </div>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-vue/2.21.2/bootstrap-vue.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
        integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.23.0/locale/th.js"></script>


</body>

</html>