<?php $this->load->view('layout/header'); ?>
<body class="">
<div class="hero min-h-screen bg-base-200 ">
<img src="/application/views/images/city.jpg" class="h-screen w-screen" alt="">
  <div class="hero-content flex-col lg:flex-row-reverse">    
    
    <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-gray-700">
      
   


      <form class="card-body ">
        <div class="form-control">
          <label class="label">
            <span class="label-text text-white">ID</span>
          </label>
          <input type="id" placeholder="아이디" class="input input-bordered bg-gray-600" required />
         
        </div>
        <div class="form-control">
          <label class="label">
            <span class="label-text text-white">Password</span>
          </label>
          <input type="password" placeholder="비밀번호" class="input input-bordered bg-gray-600" required />



        </div>
        <div class="form-control mt-6">
        <label class="label mb-3">
            <a href="#" class="label-text-alt link link-hover text-white">아이디 찾기</a>
            <a href="#" class="label-text-alt link link-hover text-white">비밀번호 찾기</a>
            <a href="join" class="label-text-alt link link-hover text-white">회원가입</a>
          </label>
          <button class="btn btn-primary bg-blue-600">로그인</button>
        </div>
      </form>
    </div>
    <div class="text-center lg:text-left text-white">
      
      <h1 class="text-6xl font-bold">Welcome QWER Cafe!</h1>
      <p class="py-6">Provident qwer voluptatem et in. Quaerat qwer ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi. 
      Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.
      
      </p>
    </div>
  </div>
</div>
</body>