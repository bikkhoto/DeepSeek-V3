<?php header("Content-Type: text/html; charset=utf-8"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>$MYXEN Tokenomics - Fair Launch on Solana | MyXenPay</title>
  <meta name="description" content="$MYXEN tokenomics: 1B total supply, fair launch on Pump.fun, 30% revenue burn mechanism. No presale, no VC allocation.">
  <meta name="keywords" content="myxen tokenomics, $myxen, solana token, pump.fun launch, crypto tokenomics, fair launch">
  
  <style>
    :root {
      --bg: #ffffff;
      --text: #111111;
      --card-bg: rgba(255, 255, 255, 0.7);
      --border: rgba(0, 0, 0, 0.05);
      --primary: #007AFF;
      --secondary: #30D158;
      --accent: #FF9F0A;
      --header-bg: rgba(255, 255, 255, 0.8);
      --shadow: 0 8px 32px rgba(0, 0, 0, 0.08);
    }

    [data-theme="dark"] {
      --bg: #000000;
      --text: #f5f5f7;
      --card-bg: rgba(30, 30, 30, 0.7);
      --border: rgba(255, 255, 255, 0.05);
      --primary: #0A84FF;
      --secondary: #32D74B;
      --accent: #FF9F0A;
      --header-bg: rgba(0, 0, 0, 0.8);
      --shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background: var(--bg);
      color: var(--text);
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      line-height: 1.6;
      padding-top: 60px;
      overflow-x: hidden;
    }

    /* Navigation */
    .top-nav {
      display: flex;
      justify-content: center;
      gap: 1.5rem;
      padding: 0.5rem 0;
      background: var(--header-bg);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      border-bottom: 1px solid var(--border);
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 1000;
    }

    .top-nav a {
      color: var(--primary);
      text-decoration: none;
      font-weight: 600;
      font-size: 0.95rem;
      transition: color 0.3s ease;
    }

    .top-nav a:hover {
      color: var(--accent);
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem 2rem;
      background: var(--header-bg);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      border-bottom: 1px solid var(--border);
      margin-top: 40px;
      position: sticky;
      top: 0;
      z-index: 999;
    }

    .logo {
      height: 64px;
      width: auto;
      filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1));
      transition: transform 0.3s ease;
    }

    .logo:hover {
      transform: scale(1.05);
    }

    .header-actions {
      display: flex;
      gap: 0.8rem;
      align-items: center;
    }

    .theme-btn, .connect-btn {
      background: none;
      border: 1px solid var(--border);
      width: 36px;
      height: 36px;
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      font-size: 14px;
      transition: all 0.3s ease;
    }

    .theme-btn:hover, .connect-btn:hover {
      transform: translateY(-2px);
      box-shadow: var(--shadow);
    }

    .connect-btn {
      background: var(--primary);
      color: white;
      border: none;
      width: auto;
      padding: 0 12px;
      font-weight: 600;
      font-size: 14px;
    }

    .connect-btn.connected {
      background: var(--secondary);
    }

    /* Hero Section */
    .hero {
      padding: 4rem 1.5rem 2rem;
      text-align: center;
      background: linear-gradient(135deg, var(--bg) 0%, var(--card-bg) 100%);
    }

    .hero h1 {
      font-size: 3rem;
      font-weight: 800;
      line-height: 1.1;
      margin-bottom: 1.5rem;
      background: linear-gradient(90deg, var(--primary), var(--accent));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .hero p {
      font-size: 1.3rem;
      max-width: 800px;
      margin: 0 auto 2rem;
      opacity: 0.8;
    }

    /* Tokenomics Sections */
    .tokenomics-container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 2rem 1.5rem;
    }

    .section {
      background: var(--card-bg);
      backdrop-filter: blur(20px);
      border: 1px solid var(--border);
      border-radius: 24px;
      padding: 3rem;
      margin-bottom: 2rem;
      box-shadow: var(--shadow);
    }

    .section h2 {
      color: var(--primary);
      font-size: 2.2rem;
      margin-bottom: 2rem;
      text-align: center;
      font-weight: 700;
    }

    .token-details-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 1.5rem;
      margin-bottom: 2rem;
    }

    .token-detail {
      background: var(--bg);
      border: 1px solid var(--border);
      border-radius: 16px;
      padding: 1.5rem;
      text-align: center;
      transition: all 0.3s ease;
    }

    .token-detail:hover {
      transform: translateY(-5px);
      box-shadow: var(--shadow);
    }

    .token-detail .label {
      color: var(--text);
      opacity: 0.7;
      font-size: 0.9rem;
      margin-bottom: 0.5rem;
    }

    .token-detail .value {
      color: var(--primary);
      font-size: 1.3rem;
      font-weight: 700;
    }

    /* Allocation Chart */
    .allocation-chart {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 2rem;
      margin: 3rem 0;
    }

    .allocation-item {
      display: flex;
      align-items: center;
      gap: 1rem;
      padding: 1rem;
      background: var(--bg);
      border-radius: 12px;
      border: 1px solid var(--border);
    }

    .allocation-color {
      width: 20px;
      height: 20px;
      border-radius: 50%;
      flex-shrink: 0;
    }

    .allocation-info {
      flex: 1;
    }

    .allocation-percentage {
      font-size: 1.5rem;
      font-weight: 800;
      color: var(--primary);
    }

    .allocation-label {
      font-weight: 600;
      margin-bottom: 0.25rem;
    }

    .allocation-description {
      font-size: 0.9rem;
      opacity: 0.7;
    }

    /* Burn Mechanism */
    .burn-mechanism {
      background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
      color: white;
      padding: 2.5rem;
      border-radius: 20px;
      margin: 2rem 0;
    }

    .burn-mechanism h3 {
      color: white;
      font-size: 1.8rem;
      margin-bottom: 1rem;
      text-align: center;
    }

    .burn-steps {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 1.5rem;
      margin-top: 2rem;
    }

    .burn-step {
      background: rgba(255, 255, 255, 0.1);
      padding: 1.5rem;
      border-radius: 12px;
      text-align: center;
      backdrop-filter: blur(10px);
    }

    .burn-step .number {
      background: white;
      color: var(--primary);
      width: 40px;
      height: 40px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 700;
      margin: 0 auto 1rem;
    }

    /* Utility Section */
    .utility-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 1.5rem;
      margin: 2rem 0;
    }

    .utility-card {
      background: var(--bg);
      border: 1px solid var(--border);
      border-radius: 16px;
      padding: 2rem;
      text-align: center;
      transition: all 0.3s ease;
    }

    .utility-card:hover {
      transform: translateY(-5px);
      box-shadow: var(--shadow);
    }

    .utility-card .icon {
      font-size: 3rem;
      margin-bottom: 1rem;
    }

    .utility-card h4 {
      color: var(--primary);
      margin-bottom: 1rem;
      font-size: 1.3rem;
    }

    /* CTA Section */
    .cta-section {
      text-align: center;
      padding: 3rem 2rem;
      background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
      color: white;
      border-radius: 20px;
      margin: 3rem 0;
    }

    .cta-section h2 {
      color: white;
      margin-bottom: 1rem;
    }

    .btn-primary {
      background: white;
      color: var(--primary);
      padding: 1rem 2rem;
      border-radius: 12px;
      text-decoration: none;
      font-weight: 600;
      display: inline-block;
      margin: 0.5rem;
      transition: all 0.3s ease;
    }

    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    }

    /* Footer */
    footer {
      background: var(--card-bg);
      backdrop-filter: blur(20px);
      border-top: 1px solid var(--border);
      padding: 3rem 1.5rem 2rem;
      margin-top: 2rem;
      text-align: center;
    }

    .footer-content {
      max-width: 1200px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 2rem;
      text-align: left;
    }

    .footer-section h3 {
      margin-bottom: 1rem;
      color: var(--primary);
      font-size: 1.2rem;
    }

    .footer-links {
      list-style: none;
    }

    .footer-links li {
      margin-bottom: 0.5rem;
    }

    .footer-links a {
      color: var(--text);
      text-decoration: none;
      opacity: 0.8;
      transition: all 0.3s ease;
    }

    .footer-links a:hover {
      opacity: 1;
      color: var(--primary);
      transform: translateX(5px);
    }

    .copyright {
      text-align: center;
      margin-top: 3rem;
      padding-top: 2rem;
      border-top: 1px solid var(--border);
      opacity: 0.7;
      font-size: 0.9rem;
    }

    /* Loading Animation */
    .loading {
      display: inline-block;
      width: 20px;
      height: 20px;
      border: 3px solid rgba(255,255,255,.3);
      border-radius: 50%;
      border-top-color: #fff;
      animation: spin 1s ease-in-out infinite;
    }

    @keyframes spin {
      to { transform: rotate(360deg); }
    }

    @media (max-width: 768px) {
      .hero h1 {
        font-size: 2.5rem;
      }
      
      .section {
        padding: 2rem 1.5rem;
      }
      
      .section h2 {
        font-size: 1.8rem;
      }
      
      .token-details-grid,
      .allocation-chart,
      .utility-grid {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>
  <!-- Top Navigation -->
  <nav class="top-nav">
    <a href="tokenomics.html">Tokenomics</a>
    <a href="whitepaper.html">Whitepaper</a>
    <a href="student-rewards.html">Student Rewards</a>
    <a href="developers.html">Developers</a>
    <a href="merchants.html">For Businesses</a>
  </nav>

  <!-- Header -->
  <header>
    <div style="display: flex; align-items: center; gap: 1rem;">
      <a href="/" style="display: flex; align-items: center; text-decoration: none;">
        <img id="theme-logo" src="/myxenpay-logo-light.png" alt="MyxenPay" class="logo">
      </a>
      <button id="back-btn" style="background: var(--card-bg); border: 1px solid var(--border); color: var(--text); padding: 8px 12px; border-radius: 8px; cursor: pointer; font-size: 14px; transition: all 0.3s ease; display: flex; align-items: center; gap: 0.5rem;" onmouseover="this.style.background='var(--primary)'; this.style.color='white'" onmouseout="this.style.background='var(--card-bg)'; this.style.color='var(--text)'">
        ← Back
      </button>
    </div>
    <div class="header-actions">
      <a href="signup" style="background: #00d664; color: white; text-decoration: none; padding: 10px 20px; border-radius: 10px; font-weight: 600; transition: all 0.3s ease; margin-right: 10px;">Join Waitlist</a>
      <a href="demo" style="background: transparent; border: 2px solid var(--primary); color: var(--primary); text-decoration: none; padding: 8px 18px; border-radius: 10px; font-weight: 600; transition: all 0.3s ease; margin-right: 10px;">View Demo</a>
      <button id="theme-toggle" class="theme-btn">☀️</button>
      <button id="connect-btn" class="connect-btn">Connect Wallet</button>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <h1>$MYXEN Tokenomics</h1>
    <p>Fair launch, transparent allocation, and sustainable burn mechanism powered by platform revenue</p>
  </section>

  <div class="tokenomics-container">
    <!-- Token Design Section -->
    <section class="section">
      <h2>Token Design</h2>
      
      <div class="token-details-grid">
        <div class="token-detail">
          <div class="label">Token Name</div>
          <div class="value">Myxen</div>
        </div>
        <div class="token-detail">
          <div class="label">Ticker</div>
          <div class="value">$MYXEN</div>
        </div>
        <div class="token-detail">
          <div class="label">Blockchain</div>
          <div class="value">Solana (SPL)</div>
        </div>
        <div class="token-detail">
          <div class="label">Total Supply</div>
          <div class="value">1,000,000,000</div>
        </div>
      </div>

      <div style="text-align: center; margin-top: 2rem;">
        <h3 style="color: var(--accent); margin-bottom: 1rem;">🚀 Fair Launch on Pump.fun</h3>
        <p style="font-size: 1.1rem; opacity: 0.9;">
          <strong>No presale • No VC allocation • Community-first approach</strong>
        </p>
        <p style="margin-top: 1rem; opacity: 0.8;">
          Launched fairly on Pump.fun with equal opportunity for all participants
        </p>
      </div>
    </section>

    <!-- Token Allocation Section -->
    <section class="section">
      <h2>Token Allocation</h2>
      
      <div class="allocation-chart">
        <div class="allocation-item">
          <div class="allocation-color" style="background: #007AFF;"></div>
          <div class="allocation-info">
            <div class="allocation-percentage">50%</div>
            <div class="allocation-label">Community & Users</div>
            <div class="allocation-description">Rewards, airdrops, staking incentives</div>
          </div>
        </div>
        
        <div class="allocation-item">
          <div class="allocation-color" style="background: #30D158;"></div>
          <div class="allocation-info">
            <div class="allocation-percentage">20%</div>
            <div class="allocation-label">Development & Marketing</div>
            <div class="allocation-description">12-month linear vesting</div>
          </div>
        </div>
        
        <div class="allocation-item">
          <div class="allocation-color" style="background: #FF9F0A;"></div>
          <div class="allocation-info">
            <div class="allocation-percentage">30%</div>
            <div class="allocation-label">Burn Mechanism</div>
            <div class="allocation-description">Funded by platform revenue</div>
          </div>
        </div>
      </div>

      <div style="background: var(--bg); padding: 1.5rem; border-radius: 12px; margin-top: 2rem; border: 1px solid var(--border);">
        <h4 style="color: var(--primary); margin-bottom: 1rem;">📊 Allocation Details</h4>
        <ul style="list-style: none; line-height: 1.8;">
          <li>🎯 <strong>500,000,000 $MYXEN</strong> - Community rewards and ecosystem growth</li>
          <li>💻 <strong>200,000,000 $MYXEN</strong> - Platform development and marketing (vested)</li>
          <li>🔥 <strong>300,000,000 $MYXEN</strong> - Deflationary burn mechanism</li>
        </ul>
      </div>
    </section>

    <!-- Burn Mechanism Section -->
    <section class="section">
      <h2>Revolutionary Burn Mechanism</h2>
      
      <div class="burn-mechanism">
        <h3>🔥 30% Platform Revenue Burn</h3>
        <p style="text-align: center; font-size: 1.1rem; opacity: 0.9; margin-bottom: 1rem;">
          Sustainable deflationary pressure powered by real platform revenue
        </p>
        
        <div class="burn-steps">
          <div class="burn-step">
            <div class="number">1</div>
            <h4>Platform Revenue</h4>
            <p>30% of all protocol revenue allocated to buybacks</p>
          </div>
          
          <div class="burn-step">
            <div class="number">2</div>
            <h4>Automatic Buybacks</h4>
            <p>Revenue used to purchase $MYXEN from the market</p>
          </div>
          
          <div class="burn-step">
            <div class="number">3</div>
            <h4>Permanent Burns</h4>
            <p>Purchased tokens are permanently removed from supply</p>
          </div>
        </div>
      </div>

      <div style="margin-top: 2rem; text-align: center;">
        <h4 style="color: var(--accent); margin-bottom: 1rem;">💰 Pump.fun Creator Fee Integration</h4>
        <p style="font-size: 1.1rem; opacity: 0.9;">
          <strong>Each 1M from creator fee burns 1% of circulating supply</strong>
        </p>
        <p style="margin-top: 1rem; opacity: 0.8;">
          Creating continuous deflationary pressure as the platform grows
        </p>
      </div>
    </section>

    <!-- Token Utility Section -->
    <section class="section">
      <h2>Token Utility & Use Cases</h2>
      
      <div class="utility-grid">
        <div class="utility-card">
          <div class="icon">💳</div>
          <h4>Payment Method</h4>
          <p>Pay with $MYXEN across the platform with discounted transaction fees</p>
        </div>
        
        <div class="utility-card">
          <div class="icon">🏆</div>
          <h4>Staking Rewards</h4>
          <p>Earn additional $MYXEN by staking your tokens and securing the network</p>
        </div>
        
        <div class="utility-card">
          <div class="icon">🗳️</div>
          <h4>Governance</h4>
          <p>Participate in platform decisions and feature voting with $MYXEN</p>
        </div>
        
        <div class="utility-card">
          <div class="icon">🎁</div>
          <h4>Premium Access</h4>
          <p>Unlock advanced features and higher rewards tiers</p>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <div class="cta-section">
      <h2>Ready to Join the $MYXEN Ecosystem?</h2>
      <p>Participate in our fair launch and be part of the payment revolution</p>
      <a href="signup" class="btn-primary">Join Waitlist</a>
      <a href="whitepaper" class="btn-primary">Read Whitepaper</a>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <div class="footer-content">
      <div class="footer-section">
        <h3>MyXenPay</h3>
        <p>Secure Crypto Payment Gateway for the Future of Finance</p>
        <div class="trust-badges" style="display: flex; gap: 10px; margin-top: 15px; flex-wrap: wrap;">
          <span style="background: #00d664; color: white; padding: 5px 10px; border-radius: 4px; font-size: 0.8rem; font-weight: bold;">🔒 SSL Secured</span>
          <span style="background: #4a5568; color: white; padding: 5px 10px; border-radius: 4px; font-size: 0.8rem; font-weight: bold;">⚡ Instant</span>
        </div>
      </div>
      
      <div class="footer-section">
        <h3>Product</h3>
        <ul class="footer-links">
          <li><a href="merchants.html">For Businesses</a></li>
          <li><a href="developers.html">Developers</a></li>
          <li><a href="tokenomics.html">Tokenomics</a></li>
          <li><a href="student-rewards.html">Student Rewards</a></li>
        </ul>
      </div>
      
      <div class="footer-section">
        <h3>Resources</h3>
        <ul class="footer-links">
          <li><a href="whitepaper.html">Whitepaper</a></li>
          <li><a href="documentation.html">Documentation</a></li>
          <li><a href="help.html">Help Center</a></li>
          <li><a href="blog.html">Blog</a></li>
        </ul>
      </div>
      
      <div class="footer-section">
        <h3>Company</h3>
        <ul class="footer-links">
          <li><a href="about.html">About Us</a></li>
          <li><a href="contact.html">Contact</a></li>
          <li><a href="privacy.html">Privacy Policy</a></li>
          <li><a href="terms.html">Terms of Service</a></li>
        </ul>
      </div>
      
      <div class="footer-section">
        <h3>Connect</h3>
        <ul class="footer-links">
          <li><a href="https://twitter.com/myxenpay">Twitter</a></li>
          <li><a href="https://t.me/myxenpay">Telegram</a></li>
          <li><a href="https://github.com/myxenpay">GitHub</a></li>
        </ul>
        <div style="background: var(--card-bg); border: 1px solid var(--border); padding: 15px; border-radius: 8px; margin-top: 15px;">
          <p style="margin: 0; font-size: 0.9rem; color: var(--text);">🚀 <strong>Launching Soon:</strong> Join our waitlist for early access</p>
        </div>
      </div>
    </div>
    
    <div class="copyright">
      <p>© 2024 MyXenPay. All rights reserved. Making crypto payments accessible for everyone.</p>
    </div>
  </footer>

  <script>
    // Global state
    let walletConnected = false;
    let walletAddress = null;

    // Theme + Logo
    function initTheme() {
      const saved = localStorage.getItem('theme');
      const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
      if (saved) {
        document.body.setAttribute('data-theme', saved);
        document.getElementById('theme-logo').src = saved === 'dark' ? 'myxenpay-logo-dark.png' : 'myxenpay-logo-light.png';
        document.getElementById('theme-toggle').textContent = saved === 'dark' ? '🌙' : '☀️';
      } else if (prefersDark) {
        document.body.setAttribute('data-theme', 'dark');
        document.getElementById('theme-logo').src = 'myxenpay-logo-dark.png';
        document.getElementById('theme-toggle').textContent = '🌙';
      } else {
        document.body.setAttribute('data-theme', 'light');
        document.getElementById('theme-logo').src = 'myxenpay-logo-light.png';
        document.getElementById('theme-toggle').textContent = '☀️';
      }
    }

    document.getElementById('theme-toggle').addEventListener('click', () => {
      const current = document.body.getAttribute('data-theme');
      const newTheme = current === 'dark' ? 'light' : 'dark';
      document.body.setAttribute('data-theme', newTheme);
      localStorage.setItem('theme', newTheme);
      document.getElementById('theme-logo').src = newTheme === 'dark' ? 'myxenpay-logo-dark.png' : 'myxenpay-logo-light.png';
      document.getElementById('theme-toggle').textContent = newTheme === 'dark' ? '🌙' : '☀️';
    });

    // Back button functionality
    document.getElementById('back-btn').addEventListener('click', () => {
      if (document.referrer && document.referrer !== window.location.href) {
        window.history.back();
      } else {
        window.location.href = '/';
      }
    });

    // Wallet Connection with Disconnect
    async function connectWallet() {
      const provider = window.solana || window.phantom?.solana;
      const connectBtn = document.getElementById('connect-btn');
      
      if (!provider) {
        alert('Please install Phantom or Backpack wallet.');
        return;
      }
      
      // If already connected, disconnect
      if (walletConnected) {
        try {
          if (provider.disconnect) {
            await provider.disconnect();
          }
          walletConnected = false;
          walletAddress = null;
          connectBtn.textContent = 'Connect Wallet';
          connectBtn.classList.remove('connected');
          return;
        } catch (error) {
          console.error('Disconnect failed:', error);
        }
      }
      
      // Connect wallet
      const originalText = connectBtn.textContent;
      connectBtn.innerHTML = '<div class="loading"></div>';
      connectBtn.disabled = true;
      
      try {
        const response = await provider.connect();
        walletConnected = true;
        walletAddress = response.publicKey.toString();
        
        const truncatedAddress = walletAddress.substring(0, 4) + '...' + walletAddress.substring(walletAddress.length - 4);
        connectBtn.textContent = `Disconnect ${truncatedAddress}`;
        connectBtn.classList.add('connected');
        connectBtn.disabled = false;
        
      } catch (err) {
        console.error('Connection failed:', err);
        connectBtn.textContent = 'Failed - Retry';
        connectBtn.disabled = false;
        setTimeout(() => {
          connectBtn.textContent = originalText;
        }, 3000);
      }
    }

    // Attach wallet connection handler
    document.getElementById('connect-btn').addEventListener('click', connectWallet);

    // Initialize
    document.addEventListener('DOMContentLoaded', initTheme);
  </script>
</body>
</html>