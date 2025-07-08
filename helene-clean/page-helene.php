<?php
/*
Template Name: Helene Landing Page
*/
add_filter('body_class', function($classes) {
    $classes[] = 'helene-landing';
    return $classes;
});
get_header();
?>
<div id="page" class="site">
  <div id="content" class="site-content">

  <div class="parallax-wrapper" style="position: relative; width: 100%; overflow: hidden;">
    <div class="parallax-bg" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/imgs/connectionbkgd.webp'); background-size: cover; background-position: center;"></div>
    <div class="hero-content">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/SparkConnection.webp" alt="Spark Connection Logo" class="helene-logo" />
    </div>
  </div>

  <section class="stats-section">
    <h2>Why This Work Matters in Transylvania County</h2>
    <div class="stats-grid">
      <div class="stat fade-in"><strong><span class="count" data-target="32">0</span>%</strong><br>live in isolated rural areas</div>
      <div class="stat fade-in"><strong><span class="count" data-target="20">0</span> in 100</strong><br>households face food insecurity</div>
      <div class="stat fade-in"><strong><span class="count" data-target="400">0</span>+</strong><br>students experiencing mental health challenges</div>
      <div class="stat fade-in"><strong><span class="count" data-target="7500">0</span>+</strong><br>reached through WRC programming</div>
    </div>
  </section>

  <section class="stats-section">
    <h2>The Case for Connection</h2>
    <p style="max-width: 700px; margin: 0 auto 2rem; font-size: 1.1rem;">
      In Transylvania County, 1 in 3 residents lives in a rural area with limited access to services. At the same time, 60% of nonprofits report operating in isolation—without consistent collaboration. We’re changing that.
    </p>
    <div class="stats-grid">
      <div class="stat fade-in"><strong>2x</strong><br>Connected residents were twice as likely to say they could handle a future crisis.</div>
      <div class="stat fade-in"><strong>60%</strong><br>of nonprofits operate without regular collaboration.</div>
      <div class="stat fade-in"><strong>81%</strong><br>want a central place to understand available services.</div>
      <div class="stat fade-in"><strong>43%</strong><br>of clients had to repeat their story 3+ times to get help.</div>
    </div>
  </section>

  <section class="collab-section">
    <h2>Our Mission: Connect the Dots</h2>
    <p class="collab-intro">We believe that connection is the foundation of resilience. Whether it’s helping someone find housing or uniting nonprofits for shared action—this project exists to build community at every level.</p>
    <div class="collab-infographics">
      <div class="collab-card fade-in">
        <h3>1 in 3</h3>
        <p>residents live in rural areas with limited service access.</p>
      </div>
      <div class="collab-card fade-in">
        <h3>57%</h3>
        <p>of frontline workers cite lack of collaboration as the top barrier to success.</p>
      </div>
      <div class="collab-card fade-in">
        <h3>70%</h3>
        <p>of youth say they’d go to a peer or teacher before a provider—trust matters.</p>
      </div>
    </div>
  </section>

  <section class="collab-section">
    <h2>Working Together, Serving Stronger</h2>
    <p class="collab-intro">Our community has the heart. Our partners have the tools. When we collaborate across organizations and break out of our silos, we serve more people—and serve them better.</p>
    <div class="collab-infographics">
      <div class="collab-card fade-in">
        <h3>57%</h3>
        <p>of rural households surveyed said they didn't know where to go for help after the storm.</p>
      </div>
      <div class="collab-card fade-in">
        <h3>3X Impact</h3>
        <p>Programs that coordinated across sectors reached three times as many residents in need.</p>
      </div>
      <div class="collab-card fade-in">
        <h3>Top Barrier:</h3>
        <p>Lack of coordination between agencies was the #1 barrier named by frontline workers.</p>
      </div>
      <div class="collab-card fade-in">
        <h3>14 Agencies</h3>
        <p>joined forces to deliver food, water, and care supplies door-to-door in the first 10 days.</p>
      </div>
      <div class="collab-card fade-in">
        <h3>Only 12%</h3>
        <p>of residents reported using more than one service—highlighting siloed systems.</p>
      </div>
    </div>
  </section>

  <section class="data-charts">
    <h2>What the Data Tells Us</h2>
    <div class="chart-grid">
      <div>
        <h3>Services by Sector</h3>
        <canvas id="sectorChart" width="300" height="300">
          <p>Your browser does not support the canvas element or Chart.js failed to load.</p>
        </canvas>
        <noscript>
          <p>Your browser does not support JavaScript, so the chart cannot be displayed.</p>
        </noscript>
      </div>
      <div>
        <h3>Where Residents First Seek Help</h3>
        <canvas id="accessChart" width="300" height="300">
          <p>Your browser does not support the canvas element or Chart.js failed to load.</p>
        </canvas>
        <noscript>
          <p>Your browser does not support JavaScript, so the chart cannot be displayed.</p>
        </noscript>
      </div>
    </div>
  </section>

  <!-- Creative Segue Section -->
  <section style="background: #fff; text-align: center; padding: 4rem 2rem;">
    <h2 style="font-size: 2rem; margin-bottom: 1rem; color: #9d509f;">From Data to Action</h2>
    <p style="max-width: 700px; margin: 0 auto; font-size: 1.1rem;">
      These numbers tell a powerful story—but they’re only the beginning. Scroll on to see how we’re turning insights into impact, one year after Helene.
    </p>
    <div style="margin-top: 3rem;">
      <svg width="48" height="48" viewBox="0 0 24 24" fill="#e03694" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 16.5l6-6-1.41-1.42L12 13.67 7.41 9.08 6 10.5l6 6z"/>
      </svg>
    </div>
  </section>
  
  <div class="parallax-wrapper" style="position: relative; width: 100%; overflow: hidden;">
    <div class="parallax-bg" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/imgs/HOYOH-logo.webp'); background-size: cover; background-position: center;"></div>
    <div class="hero-content">
      <div style="display: flex; align-items: center; justify-content: center; width: 100%; gap: 3rem; color: white; text-shadow: 2px 2px 4px rgba(0,0,0,0.6); font-size: 3.5rem; font-weight: bold;">
        <span style="flex: 1; text-align: right;">SEPTEMBER</span>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/HOYOH-logo.webp" alt="Helene: One Year of Healing Logo" class="helene-logo" />
        <span style="flex: 1; text-align: left;">27TH, 2025</span>
      </div>
    </div>
  </div>




  <section class="cta-section">
    <h1>A Year of Healing. A Moment of Unity.</h1>
    <p>Sign up for updates as we move toward One Year of Healing after Helene.</p>
    <a href="https://www.yoursparkpoint.org/community-connections" class="cta-button">Sign Up for Updates &rarr;</a>
  </section>



  <!-- Quick Access Bar -->
  <section class="quick-access" style="background: #f3f3f3; padding: 2rem 1rem; text-align: center;">
    <h2 style="margin-bottom: 1rem;">Need Help Now?</h2>
    <p style="margin-bottom: 1rem;">Find resources for food, shelter, mental health and more.</p>
    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 1rem;">
      <a href="#" class="cta-button">Food Resources</a>
      <a href="#" class="cta-button">Shelter</a>
      <a href="#" class="cta-button">Mental Health</a>
      <a href="#" class="cta-button">Financial Assistance</a>
    </div>
  </section>

  <!-- Community Voices Section -->
  <section class="voices-section" style="background: #fff; padding: 4rem 2rem; text-align: center;">
    <h2>Community Voices</h2>
    <p style="max-width: 600px; margin: 0 auto 2rem;">Hear from those who’ve made recovery possible—and those who’ve found healing through connection.</p>
    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 2rem;">
      <blockquote style="max-width: 300px; font-style: italic;">“It wasn’t just about fixing homes—it was about restoring hope.”<br><span style="display:block; margin-top: 0.5rem; font-weight: bold;">– Local Volunteer</span></blockquote>
      <blockquote style="max-width: 300px; font-style: italic;">“I finally felt seen. Connected. Like I belonged again.”<br><span style="display:block; margin-top: 0.5rem; font-weight: bold;">– Community Member</span></blockquote>
    </div>
  </section>

  <!-- Submit a Resource Section -->
  <section class="submit-section" style="background: #fafafa; padding: 4rem 2rem; text-align: center;">
    <h2>Suggest a Resource</h2>
    <p style="max-width: 600px; margin: 0 auto 1.5rem;">Know an organization or support service that should be included? Help us grow the network.</p>
    <form action="#" method="POST" style="max-width: 600px; margin: 0 auto;">
      <input type="text" name="name" placeholder="Your Name" required style="width: 100%; padding: 0.75rem; margin-bottom: 1rem; border: 1px solid #ccc;">
      <input type="email" name="email" placeholder="Your Email" required style="width: 100%; padding: 0.75rem; margin-bottom: 1rem; border: 1px solid #ccc;">
      <textarea name="message" rows="5" placeholder="Describe the resource" required style="width: 100%; padding: 0.75rem; border: 1px solid #ccc;"></textarea>
      <br><br>
      <button type="submit" class="cta-button">Submit Resource</button>
    </form>
  </section>

  <section class="partners-section">
    <h2>Our Core Partners</h2>
    <div class="partner-cards">
      <div class="partner fade-in">
        <div class="logo-box">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/SparkPointLogoMain.png" alt="SparkPoint" />
        </div>
        <p>Lead agency fostering emotional resilience and connection through inclusive events.</p>
      </div>
      <div class="partner fade-in">
        <div class="logo-box">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/fwrd.webp" alt="Transylvania LTRG" />
        </div>
        <p>Supporting long-term recovery and community preparedness through coalition building.</p>
      </div>
      <div class="partner fade-in">
        <div class="logo-box">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/hungerco.webp" alt="Hunger Coalition of Transylvania County" />
        </div>
        <p>Backbone for food access and rural community outreach, connecting health with nutrition.</p>
      </div>
      <div class="partner fade-in">
        <div class="logo-box">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/justecon.webp" alt="Just Economics of WNC" />
        </div>
        <p>Advancing economic justice through financial literacy and empowerment programs.</p>
      </div>
      <div class="partner fade-in">
        <div class="logo-box">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/tcstrong.webp" alt="TC STRONG" />
        </div>
        <p>Championing youth mental health across schools and local organizations in the county.</p>
      </div>
      <div class="partner fade-in">
        <div class="logo-box">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/UNC Health Pardee Logo Vert 4c.png" alt="UNC Health Pardee" />
        </div>
        <p>Healthcare provider bringing regional strength and stewardship to recovery and wellness efforts.</p>
      </div>
      <div class="partner fade-in">
        <div class="logo-box">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/unchealthfound.webp" alt="UNC Health Pardee Foundation" />
        </div>
        <p>Fiduciary agent supporting financial oversight and compliance for community-based initiatives.</p>
      </div>
    </div>
    <div style="margin-top: 3rem; text-align: center;">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/ARC_Logo_Classic_Horiz_RGB.png" alt="American Red Cross Logo" style="max-height: 150px;" />
      <p style="font-size: 0.95rem; color: #666;">This initiative was made possible in part by a Long-Term Recovery grant from the American Red Cross.</p>
    </div>
  </section>

  <footer class="brand-footer">
    <div class="logos">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/SparkPointLogoMain.png" alt="SparkPoint Logo" />
    </div>
  </footer>

  <button id="backToTop" title="Back to Top">↑</button>


  </div>
</div>
<?php get_footer(); ?>