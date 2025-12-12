<!-- === PROGRAM HIGHLIGHTS SECTION === -->
<section class="iiebm-programHighlights commonSection py-5">
  <div class="container">

    <!-- Section Title -->
    <div class="section-title text-center mb-5">
      <span class="sub-title">Program Highlights</span>
      <h2 class="title">Learning <span class="highLighted">Beyond Classrooms</span></h2>
      <p class="text-muted small mt-2">
        At IIEBM, our PGDM programs combine applied learning, mentorship, and corporate immersion — 
        transforming students into well-rounded business professionals.
      </p>
    </div>

    <!-- Swiper -->
    <div class="swiper programHighlightsSwiper">
      <div class="swiper-wrapper my-3">

        <?php
        $program_highlights = [
          [
            'bg' => 'highlight-yellow',
            'icon' => 'fa-solid fa-chalkboard-user',
            'title' => 'Practical Learning',
            'desc' => 'Engage in real case studies, simulations, and projects that replicate business challenges and sharpen problem-solving skills.'
          ],
          [
            'bg' => 'highlight-green',
            'icon' => 'fa-solid fa-briefcase',
            'title' => 'Capstone Projects',
            'desc' => 'Work on live business issues through data analysis, strategic insights, and performance optimization across domains.'
          ],
          [
            'bg' => 'highlight-purple',
            'icon' => 'fa-solid fa-user-tie',
            'title' => 'Industry-Experienced Faculty',
            'desc' => 'Learn from a team of industry veterans and researchers who blend academic knowledge with real-world expertise.'
          ],
          [
            'bg' => 'highlight-blue',
            'icon' => 'fa-solid fa-handshake',
            'title' => 'Internship Opportunities',
            'desc' => 'Gain hands-on exposure by interning with top companies and applying classroom knowledge in corporate setups.'
          ],
          [
            'bg' => 'highlight-red',
            'icon' => 'fa-solid fa-graduation-cap',
            'title' => 'On-Job Trainers & Mentorship',
            'desc' => 'Corporate mentors guide students in practical areas like operations, analytics, and strategic decision-making.'
          ],
          [
            'bg' => 'highlight-gold',
            'icon' => 'fa-solid fa-lightbulb',
            'title' => 'Industry Seminars & Expert Talks',
            'desc' => 'CXOs, entrepreneurs, and domain leaders conduct sessions to enhance business acumen and leadership perspective.'
          ],
        ];

        foreach ($program_highlights as $item): ?>
          <div class="swiper-slide">
            <div class="programHighlight-card <?php echo $item['bg']; ?>">
              <div class="programHighlight-icon">
                <i class="<?php echo $item['icon']; ?>"></i>
              </div>
              <h4 class="programHighlight-title"><?php echo $item['title']; ?></h4>
              <p class="programHighlight-desc"><?php echo $item['desc']; ?></p>
            </div>
          </div>
        <?php endforeach; ?>

      </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>    </div>

  </div>
</section>