@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img
                src="https://github.com/HimashiNethinikaRodrigo/InstaLike-Application/blob/master/public/images/header_image.png?raw=true" alt="header image"
                class="rounded-circle" height="150px">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user -> username ?? 'username not found'}}</h1>
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4"><strong>{{$user -> profile -> title ?? 'title not found'}}</strong></div>
            <div>{{$user-> profile-> description ?? 'description not found'}}</div>
            <div>
                <a href="https://l.instagram.com/?u=https%3A%2F%2Fwww.freecodecamp.org%2F&e=ATN6CTxdlSXP3iF6dbX-8qASNSKtdKSi8_ZUCViLEVXnu-iBRH0i6qtt_IUys5jKfCFsbcaKXWRYMYnnkEA4DGC547h_CLY-&s=1">
                    {{$user-> profile-> url ?? 'url not found'}}
                </a>
            </div>

        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img
                src="https://scontent-ams4-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c0.124.1028.1028a/s640x640/133523544_1128630347573424_7456782365173610953_n.jpg?_nc_ht=scontent-ams4-1.cdninstagram.com&_nc_cat=100&_nc_ohc=SoK8Ik-ZawQAX_njJow&tp=1&oh=dd9fac5295a99cace6a76bae907c3826&oe=6016A583"
                alt="Photo by freeCodeCamp.org on December 29, 2020.
                Image may contain: text that says
                 'USED CODE FROM THE INTERNET PROGRAMMER BINGO WROTE UNIT TESTS SPENT HOURS FIXING UI ISSUE MISSED SEMI- COLON
                  FORGOT HAD IMPOSTER SYN- DROME COMMIT CODE USED A WEB API LEARNED FRAME- WORK REFAC-
                  TORED CODE CODED THE FRONTEND WROTE PSEUDO- CODE DEPLOYED TO PRO- DUCTION FIREE USED 3RD PARTY LIBRARY FOUND
                  YOUR OWN BUG FIXED A BUG IN CODE DID A CODE REVIEW CODED THE BACKEND MISSED A REQUIRE- MENT USED DATA-
                  BASE ACCEPTED PULL REQUEST CODE WORKED FIRST TRY PULLED ALL NIGHTER CODING FIXEDA CORS ERROR SAID
                  'IT WORKS ON MY MACHINE' [KG.codes]'."
                class="w-100">
        </div>
        <div class="col-4">
            <img
                src="https://scontent-amt2-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c0.126.1030.1030a/s640x640/132108303_387834418947654_9162973108623918750_n.jpg?_nc_ht=scontent-amt2-1.cdninstagram.com&_nc_cat=106&_nc_ohc=d31luqRGYmkAX_z4eds&tp=1&oh=bc4b6f7b94ae465295823f87fe19644e&oe=60163315"
                alt="Photo by freeCodeCamp.org on December 22, 2020. Image may contain: 2 people, indoor."
                class="w-100">
        </div>
        <div class="col-4">
            <img
                src="https://scontent-ams4-1.cdninstagram.com/v/t51.2885-15/e35/c132.0.564.564a/131897168_727687298175032_7267052498875164208_n.jpg?_nc_ht=scontent-ams4-1.cdninstagram.com&_nc_cat=108&_nc_ohc=Oy9enLoeX2AAX-gYtwe&tp=1&oh=4bc4c366de8fd1e646850f615f3edc1a&oe=6013DA68"
                alt="Photo by freeCodeCamp.org on December 17, 2020. Image may contain: screen."
                class="w-100">
        </div>
    </div>


</div>
@endsection
