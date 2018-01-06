<?
  $selected_menu = "home";
	
	include "./header.inc.php";
?>
    
    <header class="home d-flex justify-content-center align-items-center">
      <div class="header-content text-center">
        <h1 class="display-4 mb-4 text-white">
          세상을 조금 더<br>
          효율적으로 만듭니다
        </h1>
        <a href="#" class="btn btn-outline btn-header contact-btn">CONTACT</a>
      </div>
    </header>
    
    <section class="bg-first text-center">
      <div class="container">
        <h2>
          <div class="text-title-block"><span class="text-title-span">데이터퍼스트는 기업의</span> <span class="text-title-span">생산성 향상을 위한</span></div>
          <div class="text-title-block"><span class="text-title-span">데이터 수집, 처리, 분석</span> <span class="text-title-span">등의 기술을 제공합니다.</span></div>
        </h2>
        <div class="row">
          <div class="col-md-4">
            <div class="card my-3">
              <div class="card-body bg-light">
                <i class="far fa-globe fa-5x fa-fw"></i>
                <p class="mt-3">
                  인터넷을 이용해서<br>
                  업무를 효율적이고<br>
                  명확하게<br>
                  처리하고 싶은가요?<br>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card my-3">
              <div class="card-body bg-light">
                <i class="far fa-chart-line fa-5x fa-fw"></i>
                <p class="mt-3">
                  각종 데이터를<br>
                  수집하고 활용해서<br>
                  의사 결정을 할 때<br>
                  참고하고 싶은가요?<br>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card my-3">
              <div class="card-body bg-light">
                <i class="far fa-cog fa-5x fa-fw"></i>
                <p class="mt-3">
                  회사의 데이터,<br>
                  컴퓨터, 네트워크<br>
                  등을 전문적으로<br>
                  관리받고 싶은가요?<br>
                </p>
              </div>
            </div>
          </div>
        </div>
        <h2 class="mt-3">
          <div class="text-title-block"><span class="text-title-span">그렇다면</span> <span class="text-title-span">데이터퍼스트에</span> <span class="text-title-span">문의해 보세요~</span></div>
        </h2>
      </div>
    </section>
    
    <section class="bg-second">
      <div class="container">
        <div class="mb-3">데이터퍼스트를 이용하면</div>
        
        <ul class="list-unstyled">
          <!--
          <li class="media">
            <i class="fa fa-retweet bg-blue mr-2"></i>
            <div class="media-body">
              <p>엑셀 등의 파편화된 데이터를 .</p>
            </div>
          </li>
          
          <li class="media">
            <i class="fa fa-retweet bg-blue mr-2"></i>
            <div class="media-body">
              <p>Bootstrap 4, Angular 4, </p>
            </div>
          </li>
          -->
          
          
          <li class="media">
            <i class="far fa-retweet bg-blue mr-2"></i>
            <div class="media-body">
              <p>반복적인 <!--(지루한)--> 작업을 다양한 방법으로 단순화/체계화/자동화하여 생산성을 향상 합니다.</p>
            </div>
          </li>
          
          <li class="media">
            <i class="far fa-list-ul bg-blue mr-2"></i>
            <div class="media-body">
              <p>각종 장비, 센스, 유저 행동 등의 실시간 데이터를 아마존 Kinesis 서비스로 수집 합니다.</p>
            </div>
          </li>
          <li class="media">
            <i class="far fa-chart-pie bg-blue mr-2"></i>
            <div class="media-body">
              <p>수집된 데이터를 아마존 API Gateway, Lambda 등을 이용해 데이터를 처리/분석 합니다.</p>
            </div>
          </li>
          <li class="media">
            <i class="fab fa-aws bg-blue mr-2"></i>
            <div class="media-body">
              <p>아마존 웹 서비스를 이용해 365일 빠르고 안정적인 인터넷 환경이 지원됩니다.</p>
            </div>
          </li>
          <li class="media">
            <i class="far fa-cubes bg-blue mr-2"></i>
            <div class="media-body">
              <p>웹사이트 제작은 반응형 웹으로 제작되며, PC는 물론 모바일에서도 잘 보입니다.</p>
            </div>
          </li>
          <li class="media">
            <i class="far fa-map-signs bg-blue mr-2"></i>
            <div class="media-body">
              <p>Rsync, NAS, AWS S3 등을 이용한 다양한 백업 방식을 안내해 드립니다.</p>
            </div>
          </li>
          <li class="media">
            <i class="far fa-tasks bg-blue mr-2"></i>
            <div class="media-body">
              <p>회사의 특성에 맞춰 백업 방식, 스케쥴, 버저닝 유무 등 백업 계획을 수립합니다.</p>
            </div>
          </li>
          <li class="media">
            <i class="far fa-history bg-blue mr-2"></i>
            <div class="media-body">
              <p>랜섬웨어, 디스크 오류 등 다양한 시나리오에 따른 복원 방법을 안내해 드립니다.</p>
            </div>
          </li>
        </ul>
      </div>
    </section>
    
    <section class="bg-first text-center">
      <div class="text-title-block">
        <span class="text-title-span"><i class="fas fa-quote-left fa-1x mx-1"></i> 세상은 저절로 좋아지지 않습니다 <i class="fas fa-quote-right fa-1x mx-1"></i></span>
        <span class="text-title-span">— 에릭 홉스봄</span>
      </div>
      <div class="my-4 quote-img">
        <img class="rounded-circle" src="/img/eric.png" alt="에릭 홉스봄">
      </div>
      <div class="text-title-block">
        <span class="text-title-span">세상의 모든 일은 애정을 가지면</span>
        <span class="text-title-span">무슨 일이든 더 잘할 수 있습니다.</span>
      </div>
      <div class="text-title-block">
        <span class="text-title-span">어제보다 조금 더 좋게 만들 수</span>
        <span class="text-title-span">있는 방법은 무엇인지 늘 고민하고</span>
      </div>
      <div class="text-title-block">
        <span class="text-title-span">이렇게도 해 보고 저렇게도 해 보면서</span>
        <span class="text-title-span">끊임없이 새로운 시도를 한다면</span>
      </div>
      <div class="text-title-block">
        <span class="text-title-span">세상을 조금 더 효율적이고</span>
        <span class="text-title-span">좋아지게 만들 수 있습니다.</span>
      </div>
    </section>
    
<?
	include "./footer.inc.php";
?>
