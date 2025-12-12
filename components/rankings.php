<?php
// === Rankings & Recognitions Data === //
$recognitions = [
  [
    "rankImg" => "assets/img/rankings/19th.png",
    "rankText" => "Ranked 19<sup>th</sup>",
    "desc" => "Among the Private Business Schools in India",
    "orgLogo" => "assets/img/rankings/times-school-logo.png",
    "orgName" => "By Times Business School"
  ],
  [
    "rankImg" => "assets/img/rankings/21st.png",
    "rankText" => "Ranked 21<sup>st</sup>",
    "desc" => "National Rank Among The Best Business Schools",
    "orgLogo" => "assets/img/rankings/iirf-logo.png",
    "orgName" => "By IIRF"
  ],
  [
    "rankImg" => "assets/img/rankings/10th.png",
    "rankText" => "Ranked 10<sup>th</sup>",
    "desc" => "Best Business School in Maharashtra",
    "orgLogo" => "assets/img/rankings/iirf-logo.png",
    "orgName" => "By IIRF"
  ],
  [
    "rankImg" => "assets/img/rankings/6th.png",
    "rankText" => "Ranked 6<sup>th</sup>",
    "desc" => "Top 25 Fastest Growing Business Schools",
    "orgLogo" => "assets/img/rankings/iirf-logo.png",
    "orgName" => "By IIRF"
  ],
  [
    "rankImg" => "assets/img/rankings/19th-outlook.png",
    "rankText" => "Ranked 19<sup>th</sup>",
    "desc" => "Among the Top West Business Schools in India",
    "orgLogo" => "assets/img/rankings/outlook-logo.png",
    "orgName" => "By Outlook ICARE Survey"
  ],
];
?>

<!-- === Rankings & Recognitions Section === -->
<section class="iiebm-recognitions py-5 position-relative">
  <div class="container">
    <h3 class="h4 fw-bold mb-4 text-center titleBlue">🏅 Rankings & Recognitions</h3>

    <div class="swiper recognitionsSwiper">
      <div class="swiper-wrapper">
        <?php foreach ($recognitions as $item): ?>
          <div class="swiper-slide">
            <div class="recognitionCard text-center">
              <div class="badgeWrap">
                <img src="<?php echo $item['rankImg']; ?>" alt="<?php echo strip_tags($item['rankText']); ?>" class="badgeIcon">
                <div class="badgeText"><?php echo $item['rankText']; ?></div>
              </div>
              <div class="recognitionDesc"><?php echo $item['desc']; ?></div>
              <div class="orgInfo mt-3">
                <img src="<?php echo $item['orgLogo']; ?>" alt="<?php echo $item['orgName']; ?>" class="orgLogo mb-2">
                <div class="orgName small text-muted"><?php echo $item['orgName']; ?></div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="swiper-pagination mt-3"></div>
    </div>
  </div>
</section>

<style>
/* === Recognitions Section Styling === */
.iiebm-recognitions {
  background: #f9fafc;
}

.titleBlue {
  color: var(--color-primary, #001752);
}

.recognitionCard {
  background: #fff;
  border-radius: 16px;
  padding: 25px 20px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.05);
  transition: all .3s ease;
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  align-items: center;
}
.recognitionCard:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 18px rgba(0,0,0,0.08);
}

.badgeWrap {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-bottom: 12px;
}
.badgeIcon {
  width: 70px;
  height: auto;
  margin-bottom: 6px;
}
.badgeText {
  font-weight: 700;
  font-size: 18px;
  color: var(--color-secondary, #001752);
}
.recognitionDesc {
  font-size: 15px;
  color: #555;
  line-height: 1.4;
  min-height: 45px;
  margin-top: 5px;
}
.orgLogo {
  height: 35px;
  width: auto;
  object-fit: contain;
  filter: grayscale(20%);
  transition: filter .3s ease;
}
.recognitionCard:hover .orgLogo {
  filter: grayscale(0%);
}
.orgName {
  font-size: 13px;
  color: #666;
}

/* Swiper Custom Pagination */
.swiper-pagination-bullet {
  background: #ccc;
  opacity: 1;
  transition: background .3s ease;
}
.swiper-pagination-bullet-active {
  background: var(--color-primary, #001752);
}
</style>
