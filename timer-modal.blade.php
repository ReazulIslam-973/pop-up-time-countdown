<style>
     
 
  @import url('https://fonts.googleapis.com/css2?family=Metal+Mania&display=swap'); 
  *{
      margin:0;
      padding:0;
  
  }
   
  
   
  img{
      width:100%;
  
  }
  .modal-header h2{
      font-family:metal mania;
      font-size:40px;
  }
  .modal-header .discount{
      font-family:metal mania;
      font-weight: 850;
      font-size:40px;
      color:rgba(245, 22, 2, 0.996)
  
  }
  .modal-header sup{
      font-family:metal mania;
      font-weight: bold;
      font-size:35px;
      color:rgba(245, 22, 2, 0.996)
  }
  .modal-header .off{
      color:rgb(255, 255, 255);
  
  
  }
  .modal-header .special{
      color:rgb(255, 255, 255);
  
  }
  
    .main{
      width:120% !important;
      display: flex;
      justify-content: center;
      align-items: center;
      transition:all 1s;
      transform: translateX(-100px);
      height: auto;
      background:url("card2.jpg") !important;
      background-size:cover !important;
      background-position: center !important;
      background-repeat: no-repeat !important;
      opacity: 0.9;
      cursor: pointer;
      flex-wrap: wrap;
      outline: none;
      border-radius: 10px;
      
      
  
      
  
  
      ; }
       .modal-header{
          display:flex;
          align-items: center;
          justify-content: center;
          flex-direction: column;
          
          
           
          ;
       }
       .my-btn1 button{
          display: flex;
          justify-self: center;
          align-items: center;
           position: relative;
           
  
       }
       #btn1{
        background-color: rgb(14, 45, 54);
        width: 80px;
        left:-30px;
        color:white;
        font-family: arial balck;
        transform:translateX(-20px);
        top:0;
        left:0;
        border:none;
        border-radius:8px;
        box-shadow:1px 0px 8px 1px white;
        transition:all 1s;
        transform: scale(0.850);
        text-transform: uppercase;
        
        
  
  
  
        
       }#btn1 span{
        font-size:18px;
  
       }
       #btn1:hover{
        background-color: orange;
        cursor: pointer;    
        color:rgb(0, 0, 0);
        transform:scale(1)
  
  
       }
       #btn2{
        /* background:linear-gradient(rgb(255, 255, 255),rgba(253, 2, 2, 0.63) ,r); */
        border:none;
        border-radius:8px;
        /* transform:translateX(300px); */
        box-sizing: border-box;
        box-shadow:1px 0px 8px 1px white;
        transform: scale(0.850);
        transition: all 1s;
        left:300px;
        position: relative;
       }
       #btn2 a{
        text-align: center;
        text-decoration:none;
        text-transform: capitalize;
        font-family:'Times New Roman', Times, serif;
        color:white;
        font-size:22px;
        font-weight: bold;
        letter-spacing:  2px;
        
      
       
  
  
       }
       #btn2:hover {
        background:rgb(255, 255, 255);
        color:orange;
        transition: all 1s;
        cursor: pointer;
        transform:scale(1)
       }
       #btn2:hover a{
        color:orange;
  
  
       }
        
  
        .timer_content{
          display: flex;
          justify-self: center;
          align-items: center;
          padding:10px;
          margin-top:30px;

          ;
        }
        .timer_content div{
          flex-basis: 100px;
          
        }
        .timer_content span{
          margin:10px;
          
        }
        .timer_content p{
          font-size: 50px;
          font-family: metal mania;
          color:white;
          
          
        }
        .demo_text h5{
          font-family:  metal mania;
          text-align: center;
          font-size:25px;
          color:rgb(0, 0, 0);
          font-weight: bold;
          text-emphasis: none;
          text-transform: uppercase;
          letter-spacing: 5px;
  
  
        }
        .demo_text p{
          text-align:center  ;
          text-emphasis: none;
          color:rgb(255, 255, 255);
          font-family:Georgia, 'Times New Roman', Times, serif;
          font-weight: bold;
          font-size:20px;
          background: rgba(25, 23, 23, 0.223);
          
        }
        .timer{
          display:flex;
          align-items: center;
          justify-content: center;
           
          width: 100%;
        }
        .timer_content span{
          
          text-emphasis: none;
          text-transform: uppercase ;
          font-family: arial black;
          color:rgb(255, 255, 255);
          
        }
        .days{
          width: 115px;
          height:100px;
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: space-evenly;
          position: relative;
          box-shadow: 15px 15px 30px rgba(0,0,0,0.5);
          font-size: 16px;
          margin:10px;
          border:none;
          border-radius:4px;

        }
        .minutes{
          width: 115px;
          height:100px;
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: space-evenly;
          position: relative;
          box-shadow: 15px 15px 30px rgba(0,0,0,0.5);
          font-size: 16px;
          margin:10px;
          border:none;
          border-radius:4px;

        }
        .hours{
          width: 115px;
          height:100px;
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: space-evenly;
          position: relative;
          box-shadow: 15px 15px 30px rgba(0,0,0,0.5);
          font-size: 16px;
          margin:10px;
          border:none;
          border-radius:4px;
        }
        .seconds{
          width: 115px;
          height:100px;
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: space-evenly;
          position: relative;
          box-shadow: 15px 15px 30px rgba(0,0,0,0.5);
          font-size: 16px;
          margin:10px;
          border:none;
          border-radius:4px;

        }
        .days:after{
          content: "";
          position: absolute;
          background-color: rgba(255,255,255,0.12);
          height: 100%;
          width: 57%;
          left: 0px;
          top: -42px;
        }
        .hours:after{
          content: "";
          position: absolute;
          background-color: rgba(255,255,255,0.12);
          height: 100%;
          width: 57%;
          left: 0px;
          top: -42px;
        }
        .seconds:after{
          content: "";
          position: absolute;
          background-color: rgba(255,255,255,0.12);
          height: 100%;
          width: 57%;
          left: 0px;
          top: -42px;
        }
        .minutes:after{
          content: "";
          position: absolute;
          background-color: rgba(255,255,255,0.12);
          height: 100%;
          width: 57%;
          left: 0px;
          top: -42px;
        }
  .timer_content p{
    background-color: #000000;
    height: 100%;
    width: 100%;
    display: grid;
    place-items: center;
    font-weight: 600;
    font-size: 5em;
    border-radius:4px;
    
  }
  
  .timer_content span{
    font-size: 1.2em;
    background-color: #03fd5a;
    display: block;
    width: 100%;
    text-align: center;
    padding: 0.5em 0;
    font-weight: 400;
    transform: translateY(-28px);
    color:black;

  }
  
   #main_id{
    transform:scale(0.9) !important;
    box-shadow: -1px 1px 8px 2px #ddd;
    
   }
   #main_id:hover{
      transform:scale(1.0) !important
   }
</style>
  
 
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

  
 

 
    
    <!-- Modal -->
    <div class="modal fade" id="time_countdown" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        
            <div class="modal-content main" id="main_id">
                <div class="modal-header" >
                    <h2> 
                       Black friday <span class="special"> Special offer  </span> 
                     <span class="discount"> 50</span><sup>% </sup>  <span class="off"> OFF </span></h2>
                      
                      
                       
                    
             
                
                <!-- //raw code target   -->
               <div class="timer">
                <div class="timer_inner">
                    <div class="timer_content">
                        <div class="days">
                          
                            <p id="days">00</p>
                            <span>Days</span>
                        </div>
                        <div class="hours">
                            <p id="hours">00</p>
                            <span>Hours</span>

                        </div>
                        <div class="minutes">
                            <p id="minutes">00</p>
                            <span>Munites</span>

                        </div>
                        <div class="seconds">
                            <p id="seconds">00</p>
                            <span>Seconds</span>
                        </div>

                    </div>
                </div>
               </div>
               <div class="demo_text"> 
                 <h5> Invest and Get Extra Fund  </h5>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
               </div>
                  <div class="button">
                    <div class="button_inner">
                        <div class="btn1">
                             
                            <button type="button" class="btn btn-secondary" id = "btn1" data-dismiss="modal"><span>Close</span></button>
                    
                   
                    
                            <button type="button" class="btn btn-primary" id="btn2"><a href="https://azeeweb.com/user/add-fund" > <span> Enroll Now ! </span></a></button>
                            
                        </div>
                    </div>
                  </div>
                  
                </div>
            </div>
        </div>
    </div>
 <div class="news">
    <iframe src="https://www.prothomalo.com" frameborder="0" width="1920px" height="1080px"></iframe>
 </div>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
     
        <script>
            // show the popup on page reload 
            $(document).ready(function(){
                $('#time_countdown').modal('show')
    
            })
          
    function ClosePopUp(){
	modal.style.display="none";
};
          
    // to get  date how many days will show the popup For Admin only
   //Edit only the below to get date how many days will show the popup
    let offer_show_days = new Date("Jun 30, 2022 00 : 00: 00").getTime();
 
    let countDownDate = offer_show_days ;

    var x = setInterval(function(){
    var now = new Date().getTime();
    var distance = countDownDate - now;

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

     


//   console.log(days)
//   console.log(hours)
//   console.log(minutes)
//   console.log(seconds)  
function makeMeTwoDigits(n){
    return (n < 10 ? "0" : "") + n;
};
    //get the countDownDate this passed the data to the document 
    document.getElementById("days").innerHTML= makeMeTwoDigits(days);
    document.getElementById("hours").innerHTML = makeMeTwoDigits(hours) ; 
    document.getElementById("minutes").innerHTML = makeMeTwoDigits(minutes);
    document.getElementById("seconds").innerHTML = makeMeTwoDigits(seconds);
    if(distance < 0 ){
        clearInterval(x);
    document.getElementById("days").innerHTML="00";
    document.getElementById("hours").innerHTML="00"; 
    document.getElementById("minutes").innerHTML="00";
    document.getElementById("seconds").innerHTML="00";
    }


},1000);



 
        </script>
        
 