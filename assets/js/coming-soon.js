  // Set countdown time (200 days from now)
  const targetDate = new Date();
  targetDate.setDate(targetDate.getDate() + 200);

  function updateCountdown() {
    const now = new Date().getTime();
    const distance = targetDate - now;

    // Time calculations
    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance / (1000 * 60 * 60)) % 24);
    const minutes = Math.floor((distance / (1000 * 60)) % 60);
    const seconds = Math.floor((distance / 1000) % 60);

    // Show result
    document.getElementById("countdown").innerHTML =
      `${days} days ${hours} hours ${minutes} minutes ${seconds} seconds`;

    // Countdown finished
    if (distance < 0) {
      document.getElementById("countdown").innerHTML = "EXPIRED";
    }
  }

  // Update every second
  setInterval(updateCountdown, 1000);

  // Run immediately
  updateCountdown();
