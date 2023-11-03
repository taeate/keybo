<?php $this->load->view('layout/header'); ?>
<body class="">
<div class="hero min-h-screen bg-base-200 ">
<img src="/application/views/images/city.jpg" class="h-screen w-screen" alt="">
  <div class="hero-content flex-col lg:flex-row-reverse w-5/6">    
    
    <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-gray-700 ">
      
      <form class="card-body">
        <div class="form-control">
          <label class="label">
            <span class="label-text text-white">아이디</span>
            <span>
                <button title="아이디중복확인" class="btn btn-primary bg-blue-600 btn-xs text-xs text-white">중복확인</button>
            </span>
          </label>
          <input type="email" placeholder="아이디" class="input input-bordered bg-gray-600 text-white" required />
          
        </div>
        <div class="form-control">
          <label class="label">
            <span class="label-text text-white">비밀번호</span>
          </label>
          <input type="password" placeholder="비밀번호" class="input input-bordered bg-gray-600 text-white" required />
        </div>
        <div class="form-control">
          <label class="label">
            <span class="label-text text-white">비밀번호 확인</span>
          </label>
          <input type="password" placeholder="비밀번호" class="input input-bordered bg-gray-600 text-white" required />
        </div>
        <div class="form-control">
            
          <label class="label">
            <span class="label-text text-white">이메일</span>
            <span>
            <button title="이메일 중복확인" class="btn btn-primary bg-blue-600 btn-xs text-xs text-white">중복확인</button>
            </span>
          </label>
          <input type="email" placeholder="qwer@gmail.com" class="input input-bordered bg-gray-600 text-white" required />
          <label class="label mt-2">
            <a href="login" class="label-text-alt link link-hover text-white">로그인 하러가기</a>
          </label>
        </div>
        
        <div class="form-control mt-6">
          <button class="btn btn-primary bg-blue-600">회원가입</button>
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