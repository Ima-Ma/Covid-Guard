<?php
    include("header.php");
    include("connection.php");
?>

<style>
   
    #icon{
        font-size: 305px;
    }
    html {
	-webkit-text-size-adjust: none; /* Prevent font scaling in landscape */
	width: 100%;
	height: 100%;
	-webkit-font-smoothing: antialiased;
	-moz-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}
input[type="submit"] {
	-webkit-appearance: none;
}
*, *:after, *:before {
	box-sizing: border-box;
	margin: 0;
	padding: 0;
}
body {
	margin: 0;
	padding: 0;
	-webkit-font-smoothing: antialiased;
	font-family: 'Muli', sans-serif;
	font-weight: 400;
	width: 100%;
	min-height: 100%;
	color: #333333;
	width: 100%;
	height: 100%;
	background: #ecf0f4;
}
a {
	outline: none;
	text-decoration: none;
	color: #555;
}
a:hover, a:focus {
	outline: none;
	text-decoration: none;
}
img {
	border: 0;
}
input, textarea, select {
	outline: none;
	resize: none;
	font-family: 'Muli', sans-serif;
}
a, input, button {
	outline: none !important;
}
 button::-moz-focus-inner {
 border: 0;
}
h1, h2, h3, h4, h5, h6 {
	margin: 0;
	padding: 0;
	font-weight: 700;
	color: #202342;
	font-family: 'Muli', sans-serif;
}
img {
	border: 0;
	vertical-align: top;
	max-width: 100%;
	height: auto;
}
ul, ol {
	margin: 0;
	padding: 0;
	list-style: none;
}
p {
	margin: 0 0 15px 0;
	padding: 0;
}

.container-fluid{
	max-width: 1900px;
}

/* Common Class */
.pd-5{padding: 5px;}
.pd-10{padding: 10px;}
.pd-20{padding: 20px;}
.pd-30{padding: 30px;}
.pb-10{padding-bottom: 10px;}
.pb-20{padding-bottom: 20px;}
.pb-30{padding-bottom: 30px;}
.pt-10{padding-top: 10px;}
.pt-20{padding-top: 20px;}
.pt-30{padding-top: 30px;}
.pr-10{padding-right: 10px;}
.pr-20{padding-right: 20px;}
.pr-30{padding-right: 30px;}
.pl-10{padding-left: 10px;}
.pl-20{padding-left: 20px;}
.pl-30{padding-left: 30px;}
.px-30{padding-left: 30px; padding-right: 30px;}
.px-20{padding-left: 20px; padding-right: 20px;}
.py-30{padding-top: 30px; padding-bottom: 30px;}
.py-20{padding-top: 20px; padding-bottom: 20px;}
.mb-30{margin-bottom: 30px;}
.mb-50{margin-bottom: 50px;}

.font-30{font-size: 30px; line-height: 1.46em;}
.font-24{font-size: 24px; line-height: 1.5em;}
.font-20{font-size: 20px; line-height: 1.5em;}
.font-18{font-size: 18px; line-height: 1.6em;}
.font-16{font-size: 16px; line-height: 1.75em;}
.font-14{font-size: 14px; line-height: 1.85em;}
.font-12{font-size: 12px; line-height: 2em;}

.weight-300{font-weight: 300;}
.weight-400{font-weight: 400;}
.weight-500{font-weight: 500;}
.weight-600{font-weight: 600;}
.weight-700{font-weight: 700;}
.weight-800{font-weight: 800;}

.text-blue{color: #1b00ff;}
.text-dark{color: #000000;}
.text-white{color: #ffffff;}
.height-100-p{height: 100%;}
.bg-white{background: #ffffff;}
.border-radius-10{
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;
}
.border-radius-100{
	-webkit-border-radius: 100%;
	-moz-border-radius: 100%;
	border-radius: 100%;
}
.box-shadow{
	-webkit-box-shadow: 0px 0px 28px rgba(0, 0, 0, .08);
	-moz-box-shadow: 0px 0px 28px rgba(0, 0, 0, .08);
	box-shadow: 0px 0px 28px rgba(0, 0, 0, .08);
}

.gradient-style1{
	background-image: linear-gradient( 135deg, #43CBFF 10%, #9708CC 100%);
}
.gradient-style2{
	background-image: linear-gradient( 135deg, #72EDF2 10%, #5151E5 100%);
}
.gradient-style3{
	background-image: radial-gradient( circle 732px at 96.2% 89.9%,  rgba(70,66,159,1) 0%, rgba(187,43,107,1) 92% );
}
.gradient-style4{
	background-image: linear-gradient( 135deg, #FF9D6C 10%, #BB4E75 100%);
}

/* widget style 1 */

.widget-style1{
	padding: 20px 10px;
}
.widget-style1 .circle-icon{
	width: 60px;
}
.widget-style1 .circle-icon .icon{
	width: 60px;
	height: 60px;
	background: #ecf0f4;
	display: flex;
	align-items: center;
	justify-content: center;
}
.widget-style1 .widget-data{
	width: calc(100% - 150px);
	padding: 0 15px;
}
.widget-style1 .progress-data{
	width: 90px;
}
.widget-style1 .progress-data .apexcharts-canvas{
	margin: 0 auto;
}

.widget-style2 .widget-data{
	padding: 20px;
}

.widget-style3{
	padding: 30px 20px;
}
.widget-style3 .widget-data{
	width: calc(100% - 60px);
}
.widget-style3 .widget-icon{
	width: 60px;
	font-size: 45px;
	line-height: 1;
}

.apexcharts-legend-marker{
	margin-right: 6px !important;
}
.clock{
    width: 550px;
    height: 150px;
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.clock div{
    position: relative;
    background-color: #ffffff;
    height: 100%;
    width: 150px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: 'Open Sans',sans-serif;
    font-size: 60px;
    color: #202020;
    border-radius: 5px;
    box-shadow: 0 15px 30px rgba(0,0,0,0.3);
    letter-spacing: 3px;
}
.clock span{
    font-weight: bolder;
    font-size: 60px;
    color: #ffffff;
}
</style>
    <div class="container mt-5">
    <div class="main-panel">
            <div class="content">
                <div class="page-inner">
                    <div class="page-header">
                    <div class="container-fluid pt-5 mt-5 pb-5">
	

        
       
        
        <div class="row">
            <div class="col-xl-8 mb-50">
                <div class="bg-white">
                <div class="clock">
        <div id="hour">00</div>
        <span class="text-dark">:</span>
        <div id="minute">00</div>
        <span  class="text-dark">:</span>
        <div id="seconds">00</div>
    </div>
                    <div id="chart9"></div>
                </div>
            </div>
            <div class="col-xl-4 mb-50">
                <div class="bg-white box-shadow border-radius-10 height-100-p pd-20">
                    <h4 class="mb-20">
                        Available Hospitals
                        <p>
                        <?php
					$sql = "select id from hospital_req order by id";
					$result = mysqli_query($conn , $sql);
					$row = mysqli_num_rows($result);
					echo "<h1>$row</h1>";
					?>
                        </p>
                    </h4>
                    <div id="chart10"></div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-xl-3 mb-50">
                <div class="bg-white box-shadow border-radius-10 height-100-p widget-style3">
                    <div class="d-flex flex-wrap align-items-center">
                    <h4 class="mb-20">
                       Available Vacccine
                        <p>
                        <?php
					$sql = "select id from vaccine_list order by id";
					$result = mysqli_query($conn , $sql);
					$row = mysqli_num_rows($result);
					echo "<h1>$row</h1>";
					?>
                        </p>
                    </h4>
                       
                    </div>
                </div>
            </div>
            <div class="col-xl-3 mb-50">
                <div class="bg-white box-shadow border-radius-10 height-100-p widget-style3">
                    <div class="d-flex flex-wrap align-items-center">
                    <h4 class="mb-20">
                        Available Hospitals
                        <p>
                        <?php
					$sql = "select id from hospital_req order by id";
					$result = mysqli_query($conn , $sql);
					$row = mysqli_num_rows($result);
					echo "<h1>$row</h1>";
					?>
                        </p>
                    </h4>
                        
                    </div>
                </div>
            </div>
            <div class="col-xl-3 mb-50">
                <div class="bg-white box-shadow border-radius-10 height-100-p widget-style3">
                    <div class="d-flex flex-wrap align-items-center">
                    <h4 class="mb-20">
                        User Visit Our Site
                        <p>
                        <?php
					$sql = "select id from user_login order by id";
					$result = mysqli_query($conn , $sql);
					$row = mysqli_num_rows($result);
					echo "<h1>$row</h1>";
					?>
                        </p>
                    </h4>
                       
                    </div>
                </div>
            </div>
            <div class="col-xl-3 mb-50">
                <div class="bg-white box-shadow border-radius-10 height-100-p widget-style3">
                    <div class="d-flex flex-wrap align-items-center">
                    <h4 class="mb-20">
                        Appointments Booked
                        <p>
                        <?php
					$sql = "select id from appointment_list order by id";
					$result = mysqli_query($conn , $sql);
					$row = mysqli_num_rows($result);
					echo "<h1>$row</h1>";
					?>
                        </p>
                    </h4>
                      
                    </div>
                </div>
            </div>
        </div>
        
     
        
      
    </div>
                        
                    </div>
                </div>
            </div>
    </div>
    </div>
    
                    
    
    <script src="./app.js"></script>
                    
                </div>
            </div>
            
        </div>
</div>
    </div>      
                            
<?php
             include("footer.php");
 ?>
 <script>
    var options = {
	series: [80],
	grid: {
		padding: {
			top: 0,
			right: 0,
			bottom: 0,
			left: 0
		},
	},
	chart: {
		height: 100,
		width: 70,
		type: 'radialBar',
	},	
	plotOptions: {
		radialBar: {
			hollow: {
				size: '50%',
			},
			dataLabels: {
				name: {
					show: false,
					color: '#fff'
				},
				value: {
					show: true,
					color: '#333',
					offsetY: 5,
					fontSize: '15px'
				}
			}
		}
	},
	colors: ['#ecf0f4'],
	fill: {
		type: 'gradient',
		gradient: {
			shade: 'dark',
			type: 'diagonal1',
			shadeIntensity: 0.8,
			gradientToColors: ['#1b00ff'],
			inverseColors: false,
			opacityFrom: [1, 0.2],
			opacityTo: 1,
			stops: [0, 100],
		}
	},
	states: {
		normal: {
			filter: {
				type: 'none',
				value: 0,
			}
		},
		hover: {
			filter: {
				type: 'none',
				value: 0,
			}
		},
		active: {
			filter: {
				type: 'none',
				value: 0,
			}
		},
	}
};

var options2 = {
	series: [70],
	grid: {
		padding: {
			top: 0,
			right: 0,
			bottom: 0,
			left: 0
		},
	},
	chart: {
		height: 100,
		width: 70,
		type: 'radialBar',
	},	
	plotOptions: {
		radialBar: {
			hollow: {
				size: '50%',
			},
			dataLabels: {
				name: {
					show: false,
					color: '#fff'
				},
				value: {
					show: true,
					color: '#333',
					offsetY: 5,
					fontSize: '15px'
				}
			}
		}
	},
	colors: ['#ecf0f4'],
	fill: {
		type: 'gradient',
		gradient: {
			shade: 'dark',
			type: 'diagonal1',
			shadeIntensity: 1,
			gradientToColors: ['#66c6ba'],
			inverseColors: false,
			opacityFrom: [1, 0.2],
			opacityTo: 1,
			stops: [0, 100],
		}
	},
	states: {
		normal: {
			filter: {
				type: 'none',
				value: 0,
			}
		},
		hover: {
			filter: {
				type: 'none',
				value: 0,
			}
		},
		active: {
			filter: {
				type: 'none',
				value: 0,
			}
		},
	}
};

var options3 = {
	series: [75],
	grid: {
		padding: {
			top: 0,
			right: 0,
			bottom: 0,
			left: 0
		},
	},
	chart: {
		height: 100,
		width: 70,
		type: 'radialBar',
	},	
	plotOptions: {
		radialBar: {
			hollow: {
				size: '50%',
			},
			dataLabels: {
				name: {
					show: false,
					color: '#fff'
				},
				value: {
					show: true,
					color: '#333',
					offsetY: 5,
					fontSize: '15px'
				}
			}
		}
	},
	colors: ['#ecf0f4'],
	fill: {
		type: 'gradient',
		gradient: {
			shade: 'dark',
			type: 'diagonal1',
			shadeIntensity: 0.8,
			gradientToColors: ['#f56767'],
			inverseColors: false,
			opacityFrom: [1, 0.2],
			opacityTo: 1,
			stops: [0, 100],
		}
	},
	states: {
		normal: {
			filter: {
				type: 'none',
				value: 0,
			}
		},
		hover: {
			filter: {
				type: 'none',
				value: 0,
			}
		},
		active: {
			filter: {
				type: 'none',
				value: 0,
			}
		},
	}
};

var options4 = {
	series: [85],
	grid: {
		padding: {
			top: 0,
			right: 0,
			bottom: 0,
			left: 0
		},
	},
	chart: {
		height: 100,
		width: 70,
		type: 'radialBar',
	},	
	plotOptions: {
		radialBar: {
			hollow: {
				size: '50%',
			},
			dataLabels: {
				name: {
					show: false,
					color: '#fff'
				},
				value: {
					show: true,
					color: '#333',
					offsetY: 5,
					fontSize: '15px'
				}
			}
		}
	},
	colors: ['#ecf0f4'],
	fill: {
		type: 'gradient',
		gradient: {
			shade: 'dark',
			type: 'diagonal1',
			shadeIntensity: 0.8,
			gradientToColors: ['#226F54'],
			inverseColors: false,
			opacityFrom: [1, 0.5],
			opacityTo: 1,
			stops: [0, 100],
		}
	},
	states: {
		normal: {
			filter: {
				type: 'none',
				value: 0,
			}
		},
		hover: {
			filter: {
				type: 'none',
				value: 0,
			}
		},
		active: {
			filter: {
				type: 'none',
				value: 0,
			}
		},
	}
};

var options5 = {
	series: [{
		name: 'series1',
		data: [30, 50, 70, 65, 80, 90]
	}],
	chart: {
		height: 110,
		type: 'area',
		toolbar: {
			show: false,
		},
		sparkline: {
			enabled: true
		}
	},
	grid: {
		show: false,
		padding: {
			left: 0,
			right: 0
		}
	},
	dataLabels: {
		enabled: false
	},
	stroke: {
		curve: 'smooth'
	},
	xaxis: {
		type: 'numeric',
		lines: {
			show: false,
		},
		axisBorder: {
			show: false,
		},
		labels: {
			show: false,
		},
	},
	yaxis: [{
		y: 0,
		offsetX: 0,
		offsetY: 0,
		labels: {
			show: false,
		},
		padding: {
			left: 0,
			right: 0
		},
	}],
	tooltip: {
		x: {
			show: false,
			format: 'dd/MM/yy HH:mm'
		},
	},
};

var options6 = {
	series: [{
		name: 'series1',
		data: [150, 650, 450, 650, 350, 480, 900]
	}],
	chart: {
		height: 110,
		type: 'line',
		toolbar: {
			show: false,
		},
		sparkline: {
			enabled: true
		}
	},
	grid: {
		show: false,
		padding: {
			left: 0,
			right: 0
		}
	},
	dataLabels: {
		enabled: false
	},
	xaxis: {
		type: 'numeric',
		lines: {
			show: false,
		},
		axisBorder: {
			show: false,
		},
		labels: {
			show: false,
		},
	},
	yaxis: [{
		y: 0,
		offsetX: 0,
		offsetY: 0,
		labels: {
			show: false,
		},
		padding: {
			left: 0,
			right: 0
		},
	}],
	tooltip: {
		x: {
			show: false,
			format: 'dd/MM/yy HH:mm'
		},
	},
	fill: {
		type: "gradient",
		gradient: {
			shadeIntensity: 1,
			opacityFrom: 0.7,
			opacityTo: 0.9,
			colorStops: [
			{
				offset: 0,
				color: "#EB656F",
				opacity: 1
			},
			{
				offset: 20,
				color: "#FAD375",
				opacity: 1
			},
			{
				offset: 60,
				color: "#61DBC3",
				opacity: 1
			},
			{
				offset: 100,
				color: "#95DA74",
				opacity: 1
			}
			]
		}
	},
};

var options7 = {
	series: [{
		data: [21, 22, 10, 28, 16, 21, 13, 30]
	}],
	chart: {
		height: 110,
		type: 'bar',
		toolbar: {
			show: false,
		},
		sparkline: {
			enabled: true
		},
		events: {
			click: function(chart, w, e) {
			}
		}
	},
	plotOptions: {
		bar: {
			columnWidth: '20px',
			distributed: true,
			endingShape: 'rounded',
		}
	},
	dataLabels: {
		enabled: false
	},
	legend: {
		show: false
	},
	xaxis: {
		type: 'numeric',
		lines: {
			show: false,
		},
		axisBorder: {
			show: false,
		},
		labels: {
			show: false,
		},
	},
	yaxis: [{
		y: 0,
		offsetX: 0,
		offsetY: 0,
		labels: {
			show: false,
		},
		padding: {
			left: 0,
			right: 0
		},
	}],
};

var options8 = {
	series: [{
		name: 'series1',
		data: [41, 50, 38, 61, 42, 70, 100]
	}, {
		name: 'series2',
		data: [21, 42, 55, 32, 34, 92, 41]
	}],
	chart: {
		height: 110,
		type: 'area',
		toolbar: {
			show: false,
		},
		sparkline: {
			enabled: true
		}
	},
	grid: {
		show: false,
		padding: {
			left: 0,
			right: 0
		}
	},
	dataLabels: {
		enabled: false
	},
	stroke: {
		show: false,
		curve: 'smooth'
	},
	xaxis: {
		type: 'numeric',
		lines: {
			show: false,
		},
		axisBorder: {
			show: false,
		},
		labels: {
			show: false,
		},
	},
	yaxis: [{
		y: 0,
		offsetX: 0,
		offsetY: 0,
		labels: {
			show: false,
		},
		padding: {
			left: 0,
			right: 0
		},
	}],
	tooltip: {
		x: {
			show: false,
			format: 'dd/MM/yy HH:mm'
		},
	},
};

var options9 = {
	chart: {
		height: 400,
		type: 'bar',
		parentHeightOffset: 0,
		fontFamily: 'Poppins, sans-serif',
		toolbar: {
			show: false,
		},
	},
	colors: ['#EB4738', '#F7AE1D'],
	grid: {
		borderColor: '#c7d2dd',
		strokeDashArray: 5,
	},
	plotOptions: {
		bar: {
			horizontal: false,
			columnWidth: '15px',
			endingShape: 'rounded'
		},
	},
	dataLabels: {
		enabled: false
	},
	stroke: {
		show: true,
		width: 2,
		colors: ['transparent']
	},
	series: [{
		name: 'In Progress',
		data: [40, 28, 47, 22, 34, 25]
	}, {
		name: 'Complete',
		data: [30, 20, 37, 10, 28, 11]
	}],
	xaxis: {
		categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
		labels: {
			style: {
				colors: ['#353535'],
				fontSize: '16px',
			},
		},
		axisBorder: {
			color: '#8fa6bc',
		}
	},
	yaxis: {
		title: {
			text: ''
		},
		labels: {
			style: {
				colors: '#353535',
				fontSize: '16px',
			},
		},
		axisBorder: {
			color: '#f00',
		}
	},
	legend: {
		horizontalAlign: 'right',
		position: 'top',
		fontSize: '16px',
		offsetY: 0,
		labels: {
			colors: '#353535',
		},
		markers: {
			width: 10,
			height: 10,
			radius: 15,
		},
		itemMargin: {
			vertical: 0
		},
	},
	fill: {
		opacity: 1

	},
	tooltip: {
		style: {
			fontSize: '15px',
			fontFamily: 'Poppins, sans-serif',
		},
		y: {
			formatter: function (val) {
				return val
			}
		}
	}
}

var options10 = {
	series: [73],
	chart: {
	  height: 350,
	  type: 'radialBar',
	  offsetY: 0
	},
	colors: ['#0B132B', '#222222'],
	plotOptions: {
	  radialBar: {
		startAngle: -135,
		endAngle: 135,
		dataLabels: {
		  name: {
			fontSize: '16px',
			color: undefined,
			offsetY: 120
		  },
		  value: {
			offsetY: 76,
			fontSize: '22px',
			color: undefined,
			formatter: function (val) {
			  return val + "%";
			}
		  }
		}
	  }
	},
	fill: {
	  type: 'gradient',
	  gradient: {
		  shade: 'dark',
		  shadeIntensity: 0.15,
		  inverseColors: false,
		  opacityFrom: 1,
		  opacityTo: 1,
		  stops: [0, 50, 65, 91]
	  },
	},
	stroke: {
	  dashArray: 4
	},
	labels: ['Achieve Goals'],
};

var chart = new ApexCharts(document.querySelector("#chart"), options);
chart.render();

var chart2 = new ApexCharts(document.querySelector("#chart2"), options2);
chart2.render();

var chart3 = new ApexCharts(document.querySelector("#chart3"), options3);
chart3.render();

var chart4 = new ApexCharts(document.querySelector("#chart4"), options4);
chart4.render();

var chart5 = new ApexCharts(document.querySelector("#chart5"), options5);
chart5.render();

var chart6 = new ApexCharts(document.querySelector("#chart6"), options6);
chart6.render();

var chart7 = new ApexCharts(document.querySelector("#chart7"), options7);
chart7.render();

var chart8 = new ApexCharts(document.querySelector("#chart8"), options8);
chart8.render();

var chart9 = new ApexCharts(document.querySelector("#chart9"), options9);
chart9.render();

var chart10 = new ApexCharts(document.querySelector("#chart10"), options10);
chart10.render();

Highcharts.chart('chart11', {
	chart: {
		type: 'packedbubble',
		height: '500px'
	},
	title: {
		text: ''
	},
	colors: ['#00bde3', '#ffad26', '#00c5e2', '#b58261', '#7cdace'],
	navigation: {
        buttonOptions: {
            enabled: false
        }
    },
	credits: {
        enabled: false
    },
	tooltip: {
		useHTML: true,
		pointFormat: '<b>{point.name}:</b> {point.value}'
	},
	plotOptions: {
		packedbubble: {
			minSize: '30%',
			maxSize: '100%',
			zMin: 0,
			zMax: 1000,
			layoutAlgorithm: {
				bubblePadding: 10,
				splitSeries: false,
				friction: 7.981,
				gravitationalConstant: 0.01
			},
			dataLabels: {
				enabled: true,
				format: '{point.name}',
				allowOverlap: true,
				filter: {
					property: 'y',
					operator: '>',
					value: 0
				},
				style: {
					color: 'black',
					textOutline: 'none',
					fontWeight: 'normal'
				}
			}
		}
	},
	series: [{
		name: 'Microservices Dev',
		data: [{
			name: 'Microservices Dev',
			value: 207.1
		}]
	}, {
		name: 'React.js',
		data: [{
			name: "React.js",
			value: 589.4
		}]
	}, {
		name: 'AWS DevOps',
		data: [{
			name: "AWS DevOps",
			value: 147.6
		}]
	}, {
		name: 'AWS DevOps',
		data: [{
			name: "AWS DevOps",
			value: 127.2
		}]
	}, {
		name: 'AWS DevOps',
		data: [{
			name: "AWS DevOps",
			value: 116.5
		}]
	}]
});

 </script>
 <script>
    let $ = document
const hourElem = $.querySelector('#hour')
const minuteElem = $.querySelector('#minute')
const secondElem = $.querySelector('#seconds')


setInterval(function () {
    let myDate = new Date()

    let nowHour = myDate.getHours()
    let nowMinute = myDate.getMinutes()
    let nowSecond = myDate.getSeconds()

    if (nowHour < 10) {
        nowHour = '0' + nowHour
    }
    if (nowMinute < 10) {
        nowMinute = '0' + nowMinute
    }
    if (nowSecond < 10) {
        nowSecond = '0' + nowSecond
    }

    hourElem.innerHTML = nowHour
    minuteElem.innerHTML = nowMinute
    secondElem.innerHTML = nowSecond

    console.log(myDate);
}, 1000);
 </script>