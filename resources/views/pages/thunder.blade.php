
@extends('layouts.default')
@section('content')

<section class="after-header p-tb-10">
    <div class="container">
        <ul class="breadcrumb">
        <li>
          <a href="/">
          <i class="material-icons">home</i>
          </a>
        </li>
        <li><a href="thunder">
          Thunder
        </a></li>
    </ul>
  </div>
</section>
<div class="container">

<div class="info-page bg-bt-gray ">
  <div class=" content ws-box m-auto">
    <style>

    .deal {
        font-size: 16px;
    }

    .deal #counter span {
        background: #c32874;
        padding: 3px 7px;
        color: white;
        font-weight: bold;
        font-size: 24px;
        border-radius: 5px;
    }

    .mark1 {
        background-color: #27AACC;
        font-weight: bold;
        color: #ffffff;
        padding: 15px 30px;
        border-radius: 100px;
        font-size: 16px;
        display: inline-block;
        font-size: 14px;
    }

    .mark2 {
        background-color: #EF4A23;
        font-weight: bold;
        color: #ffffff;
        padding: 15px 30px;
        border-radius: 100px;
        font-size: 24px;
    }

    .mark3 {
        background-color: #2B398F;
        font-weight: bold;
        color: #ffffff;
        padding: 15px 30px;
        border-radius: 100px;
        font-size: 20px;
    }

    .deal {
        text-align: center;
    }

    .deal img {
        width: 256px;
        display: bnlock;
    }

    .deal p {
        display: block;
    }

    .featured-product {
        margin-top: 30px;
    }
</style>
<div class="deal">
    <p style="padding: 15px 0px; display: block;" id="comingSoon">বিভিন্ন প্রযুক্তি পণ্যে বিশাল মূল্য ছাড়ে স্টার টেকে আসছে ১১-১১ স্পেশাল ফ্লাশ সেল। এক্সেসরিজ এবং গ্যাজেটে থাকছে বিশাল মূল্য ছাড় ! বিভিন্ন মডেলের <span style="color: red;">কিবোর্ড</span>, <span style="color: blue;">মাউস</span>, <span style="color: green;">হেডফোন</span> সহ আকর্ষণীয় সব  এক্সেসরিজ এবং গ্যাজেটের অফার মূল্য দেখতে এই পেইজ ভিজিট করুন ১২ ই নভেম্বর শুক্রবার রাত ৯টায়।</p>
    <p style="padding: 15px 0; display:none;" id="liveNow">স্টার টেক এ চলছে ১১-১১ স্পেশাল ফ্লাস সেল। এক্সেসরিজ এবং গ্যাজেটে বিভিন্ন আকর্ষণীয় প্রযুক্তি পণ্য কিনলে পাচ্ছেন বিশাল মূল্য ছাড় ! <br>বিভিন্ন মডেলের <span style="color: red;">কিবোর্ড</span>, <span style="color: blue;">মাউস</span>, <span style="color: green;">হেডফোন</span> সহ আকর্ষণীয় সব  এক্সেসরিজ এবং গ্যাজেটে অফার গুলো দেখতে নিচে স্ক্রল করুন ⬇️</p>
    <p style="padding: 15px 0; display:none;" id="offerEnded">চলছে ১১-১১ মেগা শপিং ফেস্টিভাল. ১৮ নভেম্বর পর্যন্ত প্রতিদিন রাত ৯ টায় আকর্ষণীয় মূল্য ছাড় নিয়ে আমরা থাকছি আপনার সাথে।</p>
    <mark class="mark1" id="validity">এছাড়াও ১৮ তারিখ পর্যন্ত প্রতিদিন রাত ৯ টায় বিভিন্ন প্রযুক্তি পণ্যে থাকছে আকর্ষণীয় মূল্য ছাড় !!!</mark>
    <div id="counter" style="margin-top: 30px;">
        <p style="margin-bottom: 10px; font-weight: bold;" id="counter-label">STARTING IN</p>
        <span id="days">00</span> : <span id="hour">00</span> : <span id="min">00</span> : <span id="sec">00</span>
    </div>
</div>
<script>
    var startDate = new Date("December 20, 2021 19:00:00").getTime();
    var endDate = new Date("January 1, 2022 08:00:00").getTime();

    var x = setInterval(function () {
        var countDownDate, now = new Date().getTime();
        if(now < startDate) {
            countDownDate = startDate;
            document.getElementById("counter-label").textContent = "STARTING IN";
            document.getElementById("comingSoon").style.display = "block";

        }else {
            document.getElementById("counter-label").textContent = "ENDING IN";
            countDownDate = endDate;
            document.getElementById("comingSoon").style.display = "none";
            document.getElementById("liveNow").style.display = "block";
        }
        var distance = countDownDate - now;
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        function pad(num, size) {
            num = num.toString();
            while (num.length < size) num = "0" + num;
            return num;
        }

        days = pad(days, 2);
        hours = pad(hours, 2);
        minutes = pad(minutes, 2);
        seconds = pad(seconds, 2);

        document.getElementById("days").innerHTML = days;
        document.getElementById("hour").innerHTML = hours;
        document.getElementById("min").innerHTML = minutes;
        document.getElementById("sec").innerHTML = seconds;
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("validity").textContent = "বিভিন্ন প্রযুক্তি পণ্যের অফারগুলো দেখতে চোখ রাখুন অফার পেইজে";
            document.getElementById("counter").style.display = "none";
            document.getElementById("liveNow").style.display = "none";
            document.getElementById("offerEnded").style.display = "block";
        }
    }, 1000);
 </script>
</div>
</div>
</div>




@stop