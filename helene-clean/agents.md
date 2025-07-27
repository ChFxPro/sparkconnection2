{
  "file": "helene-clean/page-helene.php",
  "purpose": "Custom WordPress landing page for the Helene: One Year of Healing event and broader WRC initiative. Must combine engaging data storytelling, community narrative, and partner branding. All content/visuals must strictly adhere to SparkPoint and Red Cross branding and approval standards.",
  "sections": [
    {
      "id": "parallax-hero",
      "intent": "Visual impact and instant branding. Displays SparkConnection visual identity, sets emotional tone.",
      "execution": "Uses background image and logo. Minimal content—only edit image file or alt text when rebranding or updating event."
    },
    {
      "id": "stats-section-1",
      "intent": "Show why the project matters in Transylvania County—data-driven credibility.",
      "execution": "Stats are animated (JS counters). Edit numbers/content only if new data available; keep plain, high-contrast, no marketing jargon."
    },
    {
      "id": "stats-section-2",
      "intent": "Explain the problem: isolation, lack of collaboration, service gaps.",
      "execution": "Support with real data; edit numbers with fresh survey data only. Messaging must stay community-focused and direct."
    },
    {
      "id": "collab-sections",
      "intent": "Demonstrate mission, partnership, and shared outcomes.",
      "execution": "Showcase statistics and stories about collaboration. Only adjust for new program results or partners. Maintain concise, impact-driven language."
    },
    {
      "id": "data-charts",
      "intent": "Visualize survey results and service access points with Chart.js. Explain 'what the data tells us.'",
      "execution": "Modify chart data in helene-charts.js. Only update canvas IDs or titles if restructuring data display. Charts must remain accessible (provide alt/fallback text)."
    },
    {
      "id": "segue-section",
      "intent": "Transition from data to storytelling/action. Signal next part of page.",
      "execution": "Edit copy only to update narrative voice or next steps. Do not remove or hide scroll indicator SVG."
    },
    {
      "id": "event-hero",
      "intent": "Highlight event date, location, and official event logo.",
      "execution": "Edit only when updating event year, venue, or branding. Logo must remain official asset (no substitutions)."
    },
    {
      "id": "cta-section",
      "intent": "Drive sign-ups for updates and engagement.",
      "execution": "Edit signup link, text, or CTA button as needed. Maintain clear, positive action-oriented copy."
    },
    {
      "id": "quick-access",
      "intent": "Provide immediate help/resource links for visitors in need.",
      "execution": "Update links as needed, but maintain four core categories (food, shelter, mental health, financial)."
    },
    {
      "id": "voices-section",
      "intent": "Humanize recovery with real community quotes.",
      "execution": "Add/edit/remove blockquotes only with new, verified testimonials. Keep attribution clear, anonymize if needed."
    },
    {
      "id": "submit-section",
      "intent": "Invite community input; grow network of resources.",
      "execution": "Edit form fields or logic as required, but maintain simplicity and accessibility. Add spam protection as needed."
    },
    {
      "id": "partners-section",
      "intent": "Acknowledge all core partners, follow exact brand/logo guidelines.",
      "execution": "Only use official partner logos from imgs/. Edit copy if partners change. Display Red Cross logo and credit per guidelines. Do not substitute, alter, or resize logos in violation of brand rules."
    },
    {
      "id": "footer",
      "intent": "Brand continuity and secondary navigation.",
      "execution": "Display only official SparkPoint logo; do not add other logos, links, or marketing unless authorized."
    }
  ],
  "brand_and_approval_requirements": [
    "Use only official logos and brand assets per SparkPoint and Red Cross brand guides.",
    "Include required Red Cross grant language in the partners section: 'This initiative was made possible in part by a Long-Term Recovery grant from the American Red Cross.'",
    "Ensure all new public-facing materials are approved by Red Cross grant managers (cynthia.routh@redcross.org, joan.ward@redcross.org) at least 3 days before launch.",
    "Maintain high-contrast, accessible text and alt tags throughout.",
    "No political or personal commentary in official content."
  ],
  "safe_zones_for_ai_editing": [
    "Updating statistics with new data.",
    "Editing event dates, locations, or partner lists.",
    "Adding new verified testimonials in the Voices section.",
    "Fixing accessibility issues (alt text, headings, color contrast).",
    "Improving chart data or logic for accuracy and accessibility."
  ],
  "do_not_edit_zones": [
    "Remove or substitute partner/Red Cross logos without explicit written approval.",
    "Alter required grant language or credits.",
    "Change parallax/hero branding without updated brand assets.",
    "Remove CTA sections or resource links without stakeholder sign-off."
  ],
  "deployment_notes": [
    "Test all visual changes in local environment.",
    "Run accessibility checker before deployment.",
    "Commit with clear message referencing affected section (e.g., 'Update Voices testimonials, Summer 2025').",
    "Bundle theme as ZIP for WordPress upload, or push to GitHub for automated deployment."
  ]
}