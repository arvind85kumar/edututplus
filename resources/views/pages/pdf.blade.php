<html>
    <head>
        <style>
            @page {
                margin: 70px 25px;
            }

            .header {
                position: fixed;
                top: -60px;
                height: 100px;
                
                color: white;
                text-align: center;
                line-height: 35px;
                width:740px;
            }
            .main-content{
            border-top:5px solid red;
            margin-top:50px;
            height:850px;
            padding:20px 10px 10px 10px;
            margin-top:85px;
            width:740px;
            font-family: 'Helvetica';
            }
            .logo{
            float:left:
            margin:5px 5px 50px 5px;
            width:120px;
            height:100px;
            padding-left:50px;
            
            }
            .about-doctor{
            color:black;
            float:right;
            text-align:right;
            width:300px;
            height:120px;
            font-family: 'Helvetica';
            lign-height:.002em;
            }
            .doctor-name{ font-size:20; font-style:bold;}
            .degree{
            font-weight:500;
            font-family: 'Helvetica';
            font-style:bold italic;
            }
            .patient-name{
            width:250px;
            height:40px;
            float:left;
            }
            .patient-info{
            font-size:16px;
            width:740px;
            font-weight:400;
            padding-bottom:5px;
            border-bottom:5px solid red;
            }
            .patient-age{
            width:150px;
            height:40px;
            float:left;
            }
            .patient-sex{
            width:150px;
            height:40px;
            float:left;
            }
            .patient-detail{
            padding:0px 5px 5px 5px;
            }
        </style>
    </head>
    <body>
        <header class="header">
        <div class="logo">
        <img src="./assets/img/fortis-hospitals.png" width="180" height="80"/>
         <span class="contact-info">01102587842</span>
        </div>
        <div class="about-doctor">
            <Address>
                <span class="doctor-name">Dr. Sumit Gupta</span><br>
                <span class="degree">MBBS, MD St. Paul college Kanpur</span><br>
                <span class="reg-no degree">Reg. No:87558522</span><br>
                <span class="contact-info degree">Pho: 011-2856234</span><br>
            </Address>
        </div>
           
        </header>
        <main class="main-content">
            <div class="patient-info">
                <div class="patient-name p-detail">
                <label class="patient-detail">Name:</label>Arun Patel test test test
                </div>
                <div class="patient-age p-detail">
                <label class="patient-detail">Age:</label> 32
                </div>
                <div class="patient-sex p-detail">
                <label class="patient-detail">Sex:</label> Male
                </div>
                <div class="payment-status p-detail">
                <label class="patient-detail">Payment Status:</label><span class="payment"> Paid</span>
                </div>
            </div>
            <div class="prescription">
            

            </div>
        </main>
       
    </body>
</html>