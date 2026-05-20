<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .testimonial img {
  width :6rem;
  height: 4rem;;
  display: block;
}
.testimonial-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
   grid-auto-rows: minmax(20px, auto);
  gap: 3rem;
}

/* first row, first column */
.testimonial:nth-child(1) {
  grid-column: 1 /span 2;
  grid-row: 1 / span 4;
}

/* first row, second column (taller) */
.testimonial:nth-child(2) {
  grid-column: 3;
grid-row-start: 2;   /* start at row 2 */
grid-row-end: span 3; /* span 3 rows downward */
}

/* second row, first column (same height as B) */
.testimonial:nth-child(3) {
  grid-column: 3;
  grid-row: 1;
}

/* second row, second column (shorter) */
.testimonial:nth-child(4) {
  grid-column: 4;
  grid-row: 1 / span 2;
}
.testimonial:nth-child(5) {
  grid-column: 4;
  grid-row: 3 / span 2; ;
}
    </style>
<body>
      <section class="d-flex align-items-end">
    <div class="container-fluid d-flex justify-content-center mx-5">
    <div class="testimonial-grid">
          <article class="testimonial">
            <img src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?q=80&w=1200&auto=format&fit=crop" alt="" class="img-thumbnail src w-100 h-50">
          </article>
          
          <article class="testimonial d-flex flex-column justify-content-between bg-light p-5 h-100">
          <div class="top-start">
            <h3>
              Timeless, and stylish furniture pieces, meticulously crafted to infuse spaces with serene simplicity and lasting elegance
            </h3>
          </div>
          <div class="bottom-end">
            <a href="#" class="link-offset-3 text-black">
              Our Manifesto →
            </a>
          </div>
        </article>
          <article class="testimonial">
            <img src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?q=80&w=1200&auto=format&fit=crop" alt="" class="img-thumbnail src w-100 h-50">
          </article>
  
          <article class="testimonial bg-light d-flex flex-column justify-content-between p-3 h-100 w-100">
            <div class="top-start">
              <img 
                src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?q=80&w=1200&auto=format&fit=crop" class="mb-3 rounded-circle" alt="User Avatar" style="height: 6rem;">
            </div>
            <div class="bottom-end">
              <h4>Donald Woodring</h4>
              <p>Lead Designer, Pure Nordic</p>
            </div>
          </article>
          <article class="testimonial">
            <img src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?q=80&w=1200&auto=format&fit=crop" alt="" class="img-thumbnail src w-100 h-50">
          </article>
        </div>

      </div>
    </div>
  </section>  
</body>
</html>