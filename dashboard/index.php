<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Dashboard Pajak - Sampang</title>

    <!-- Bootstrap 5 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <style>
      body {
        background: #f6f9fb;
      }
      .left-col {
        width: 290px;
        min-width: 240px;
      }
      .stat-card {
        color: #fff;
        border-radius: 0.6rem;
        padding: 18px;
        margin-bottom: 14px;
        box-shadow: 0 6px 14px rgba(30, 60, 90, 0.06);
      }
      .stat-card .count {
        font-weight: 700;
        font-size: 20px;
      }
      .stat-card .label {
        opacity: 0.95;
        font-size: 13px;
        margin-top: 6px;
      }

      .card-ghost {
        border-radius: 0.6rem;
        box-shadow: 0 6px 14px rgba(30, 60, 90, 0.04);
      }

      .kpi-small {
        font-size: 12px;
        color: #6b7280;
      }
      .kpi-value {
        font-weight: 700;
        font-size: 16px;
        color: #0b5ed7;
      }

      /* responsive adjustments */
      @media (max-width: 991px) {
        .left-col {
          width: 100%;
          min-width: 0;
        }
      }
    </style>
  </head>
  <body>
    <div class="container-fluid py-4">
      <div class="row g-3">
        <!-- LEFT COLUMN : kategori -->
        <div class="col-lg-3 left-col">
          <h6 class="mb-3">Jumlah WP</h6>

          <div
            class="stat-card"
            style="background: linear-gradient(90deg, #2b8cff, #2b6bff)"
          >
            <div class="d-flex justify-content-between align-items-start">
              <div>
                <div class="count">3.107 WP</div>
                <div class="label">BPHTB</div>
              </div>
              <div style="font-size: 26px; opacity: 0.18">🏦</div>
            </div>
          </div>

          <div
            class="stat-card"
            style="background: linear-gradient(90deg, #16a34a, #12a35a)"
          >
            <div class="d-flex justify-content-between align-items-start">
              <div>
                <div class="count">285.560 WP</div>
                <div class="label">PBB P2</div>
              </div>
              <div style="font-size: 26px; opacity: 0.18">🏠</div>
            </div>
          </div>

          <div
            class="stat-card"
            style="background: linear-gradient(90deg, #f97316, #ff6b35)"
          >
            <div class="d-flex justify-content-between align-items-start">
              <div>
                <div class="count">1.471 WP</div>
                <div class="label">PBJT Makan & Minum</div>
              </div>
              <div style="font-size: 26px; opacity: 0.18">🍽️</div>
            </div>
          </div>

          <div
            class="stat-card"
            style="background: linear-gradient(90deg, #ef4444, #ff6b81)"
          >
            <div class="d-flex justify-content-between align-items-start">
              <div>
                <div class="count">552 WP</div>
                <div class="label">PBJT Hotel</div>
              </div>
              <div style="font-size: 26px; opacity: 0.18">🏨</div>
            </div>
          </div>

          <div
            class="stat-card"
            style="background: linear-gradient(90deg, #06b6d4, #06a0c4)"
          >
            <div class="d-flex justify-content-between align-items-start">
              <div>
                <div class="count">469 WP</div>
                <div class="label">PBJT Hiburan</div>
              </div>
              <div style="font-size: 26px; opacity: 0.18">🎭</div>
            </div>
          </div>

          <div
            class="stat-card"
            style="background: linear-gradient(90deg, #8b5cf6, #7b4cf6)"
          >
            <div class="d-flex justify-content-between align-items-start">
              <div>
                <div class="count">1.047 WP</div>
                <div class="label">Pajak Reklame</div>
              </div>
              <div style="font-size: 26px; opacity: 0.18">📣</div>
            </div>
          </div>

          <div
            class="stat-card"
            style="background: linear-gradient(90deg, #ec4899, #ff6fb3)"
          >
            <div class="d-flex justify-content-between align-items-start">
              <div>
                <div class="count">870 WP</div>
                <div class="label">PBJT Parkir</div>
              </div>
              <div style="font-size: 26px; opacity: 0.18">🅿️</div>
            </div>
          </div>

          <div
            class="stat-card"
            style="background: linear-gradient(90deg, #334155, #475569)"
          >
            <div class="d-flex justify-content-between align-items-start">
              <div>
                <div class="count">494 WP</div>
                <div class="label">PBJT PPJ</div>
              </div>
              <div style="font-size: 26px; opacity: 0.18">⚡</div>
            </div>
          </div>

          <div
            class="stat-card"
            style="background: linear-gradient(90deg, #0284c7, #0369a1)"
          >
            <div class="d-flex justify-content-between align-items-start">
              <div>
                <div class="count">509 WP</div>
                <div class="label">Air Tanah</div>
              </div>
              <div style="font-size: 26px; opacity: 0.18">💧</div>
            </div>
          </div>
        </div>
        <!-- end left -->

        <!-- MAIN COLUMN -->
        <div class="col-lg-9">
          <div class="row g-3">
            <!-- Chart + Donut -->
            <div class="col-12 d-flex gap-3">
              <div class="card card-ghost flex-fill p-3">
                <h6 class="mb-3">Pencapaian Target Pajak Daerah</h6>
                <canvas id="lineChart" height="160"></canvas>
                <small class="text-muted d-block mt-2"
                  >Perbandingan 2024 vs 2025 (Miliar)</small
                >
              </div>

              <div
                class="card card-ghost"
                style="
                  width: 260px;
                  padding: 20px;
                  display: flex;
                  flex-direction: column;
                  align-items: center;
                  justify-content: center;
                "
              >
                <h6>Pencapaian Realisasi Target</h6>
                <canvas id="donutChart" width="140" height="140"></canvas>
                <div
                  style="
                    font-size: 20px;
                    font-weight: 700;
                    margin-top: 6px;
                    color: #16a34a;
                  "
                >
                  51%
                </div>
              </div>
            </div>

            <!-- KPI small cards (grid) -->
            <div class="col-12">
              <div class="row g-3">
                <!-- repeat small cards -->
                <div class="col-md-4 col-lg-3">
                  <div class="card card-ghost p-3">
                    <div class="kpi-small">BPHTB</div>
                    <div class="kpi-value">Target: Rp 331 M</div>
                    <div class="text-muted small">Realisasi: Rp 105 M</div>
                    <div class="mt-2">
                      <a href="#" class="small"
                        >Capaian: <strong>31.7%</strong></a
                      >
                    </div>
                  </div>
                </div>

                <div class="col-md-4 col-lg-3">
                  <div class="card card-ghost p-3">
                    <div class="kpi-small">PBB P2</div>
                    <div class="kpi-value">Target: Rp 205 M</div>
                    <div class="text-muted small">Realisasi: Rp 158 M</div>
                    <div class="mt-2">
                      <a href="#" class="small"
                        >Capaian: <strong>77.1%</strong></a
                      >
                    </div>
                  </div>
                </div>

                <div class="col-md-4 col-lg-3">
                  <div class="card card-ghost p-3">
                    <div class="kpi-small">PBJT Makan & Minum</div>
                    <div class="kpi-value">Target: Rp 202 M</div>
                    <div class="text-muted small">Realisasi: Rp 118 M</div>
                    <div class="mt-2">
                      <a href="#" class="small"
                        >Capaian: <strong>58.4%</strong></a
                      >
                    </div>
                  </div>
                </div>

                <div class="col-md-4 col-lg-3">
                  <div class="card card-ghost p-3">
                    <div class="kpi-small">PBJT Hotel</div>
                    <div class="kpi-value">Target: Rp 115 M</div>
                    <div class="text-muted small">Realisasi: Rp 48 M</div>
                    <div class="mt-2">
                      <a href="#" class="small"
                        >Capaian: <strong>41.7%</strong></a
                      >
                    </div>
                  </div>
                </div>

                <div class="col-md-4 col-lg-3">
                  <div class="card card-ghost p-3">
                    <div class="kpi-small">PBJT Hiburan</div>
                    <div class="kpi-value">Target: Rp 25 M</div>
                    <div class="text-muted small">Realisasi: Rp 15 M</div>
                    <div class="mt-2">
                      <a href="#" class="small"
                        >Capaian: <strong>60.0%</strong></a
                      >
                    </div>
                  </div>
                </div>

                <div class="col-md-4 col-lg-3">
                  <div class="card card-ghost p-3">
                    <div class="kpi-small">PBJT Parkir</div>
                    <div class="kpi-value">Target: Rp 7 M</div>
                    <div class="text-muted small">Realisasi: Rp 4 M</div>
                    <div class="mt-2">
                      <a href="#" class="small"
                        >Capaian: <strong>57.1%</strong></a
                      >
                    </div>
                  </div>
                </div>

                <div class="col-md-4 col-lg-3">
                  <div class="card card-ghost p-3">
                    <div class="kpi-small">Pajak Reklame</div>
                    <div class="kpi-value">Target: Rp 10 M</div>
                    <div class="text-muted small">Realisasi: Rp 4 M</div>
                    <div class="mt-2">
                      <a href="#" class="small"
                        >Capaian: <strong>40.0%</strong></a
                      >
                    </div>
                  </div>
                </div>

                <div class="col-md-4 col-lg-3">
                  <div class="card card-ghost p-3">
                    <div class="kpi-small">PBJT PPJ</div>
                    <div class="kpi-value">Target: Rp 86 M</div>
                    <div class="text-muted small">Realisasi: Rp 48 M</div>
                    <div class="mt-2">
                      <a href="#" class="small"
                        >Capaian: <strong>55.8%</strong></a
                      >
                    </div>
                  </div>
                </div>

                <div class="col-md-4 col-lg-3">
                  <div class="card card-ghost p-3">
                    <div class="kpi-small">Air Tanah</div>
                    <div class="kpi-value">Target: Rp 12 M</div>
                    <div class="text-muted small">Realisasi: Rp 8 M</div>
                    <div class="mt-2">
                      <a href="#" class="small"
                        >Capaian: <strong>66.7%</strong></a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- inner row -->
        </div>
        <!-- main col -->
      </div>
      <!-- outer row -->
    </div>
    <!-- container -->

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>

    <script>
      // sample data for line chart
      const lineCtx = document.getElementById("lineChart").getContext("2d");
      const lineChart = new Chart(lineCtx, {
        type: "line",
        data: {
          labels: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul"],
          datasets: [
            {
              label: "2024 (Miliar)",
              data: [20, 40, 60, 80, 120, 200, 300],
              fill: false,
              borderColor: "#3b82f6",
              tension: 0.25,
              pointRadius: 3,
            },
            {
              label: "2025 (Miliar)",
              data: [30, 60, 80, 120, 200, 400, 1200],
              fill: false,
              borderColor: "#f97316",
              tension: 0.25,
              pointRadius: 3,
            },
          ],
        },
        options: {
          plugins: { legend: { position: "bottom" } },
          scales: { y: { beginAtZero: true } },
        },
      });

      // donut chart
      const donutCtx = document.getElementById("donutChart").getContext("2d");
      const donut = new Chart(donutCtx, {
        type: "doughnut",
        data: {
          labels: ["Realisasi", "Sisa"],
          datasets: [
            { data: [51, 49], backgroundColor: ["#16a34a", "#e6eef4"] },
          ],
        },
        options: { cutout: "70%", plugins: { legend: { display: false } } },
      });
    </script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
