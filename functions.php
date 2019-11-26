<?php
add_shortcode( 'download', 'download_shortcode' );

function download_shortcode( $atts ) {

	// Attributes
	$atts = shortcode_atts(
		array(
			'href' => '',
			'title' => '',
			'type' => '',
			'h3' => '',
		),
		$atts,
		'download'
	);

	// Check h3
	if($atts['h3'] == "yes") $atts['title'] = '<h3>' . $atts['title'] . '</h3>'; 
	
	// Title words replace
  $doc_name = $atts['title'];
  $doc_name_replace = array('Скачать' => '', 'образец' => 'Образец');
  $doc_name = str_replace(array_keys($doc_name_replace), $doc_name_replace, $doc_name);	
  
  // Doc type
  $doc_type = $atts['type'];

  // Default word icon
  $icon = <<<HTML
      <svg width="30" height="38" fill="#2B569A"> <path d="M3 0h18.757a3 3 0 0 1 2.122.879L29.12 6.12A3 3 0 0 1 30 8.243V35a3 3 0 0 1-3 3H3a3 3 0 0 1-3-3V3a3 3 0 0 1 3-3zm3.81 29.872l15 2.898a1 1 0 0 0 1.19-.982V8.212a1 1 0 0 0-1.19-.982l-15 2.898a1 1 0 0 0-.81.982v17.78a1 1 0 0 0 .81.982zm10.32-8.015L18.89 15H21l-3.303 10h-1.633l-1.73-7.104L12.601 25h-1.633L8 15h2.083l1.467 7.01 1.87-6.982h2.006l1.704 6.829z"></path> </svg>
  HTML;
	
if($doc_type == 'pdf') {
	
$icon = <<<HTML
<svg width="30" height="38" fill="#DE2B33"> <path d="M3 0h18.757a3 3 0 0 1 2.122.879L29.12 6.12A3 3 0 0 1 30 8.243V35a3 3 0 0 1-3 3H3a3 3 0 0 1-3-3V3a3 3 0 0 1 3-3zm21.846 21.46c-.336-.625-1.162-.932-2.516-.932-.795 0-1.773.099-2.913.297-1.59-1.617-3.24-3.977-4.411-6.298a34.73 34.73 0 0 0 .489-2.252c.153-.883.336-1.894.142-2.787-.08-.357-.295-.675-.54-.942-.213-.229-.509-.546-.855-.546-.184 0-.683.08-.876.139-.5.159-.764.536-.978 1.011-.611 1.38.224 3.72 1.09 5.535-.744 2.827-1.976 6.21-3.28 8.957-3.28 1.448-5.022 2.866-5.185 4.225-.061.496.061 1.22.968 1.865.244.178.54.268.835.268.754 0 1.528-.556 2.414-1.756.642-.872 1.345-2.063 2.068-3.54 2.323-.973 5.185-1.856 7.65-2.352 1.365 1.26 2.597 1.905 3.647 1.905.774 0 1.436-.347 1.925-.992.499-.675.611-1.28.326-1.805zm-18.01 7.13c-.407-.297-.376-.496-.376-.575.05-.466.804-1.29 2.658-2.281-1.395 2.49-2.149 2.817-2.282 2.856zm7.11-19.093c.041-.01.907.912.082 2.678-1.233-1.21-.173-2.649-.081-2.678zm-1.792 13.35a56.49 56.49 0 0 0 2.312-6.298c.968 1.676 2.139 3.313 3.31 4.622a43.255 43.255 0 0 0-5.622 1.676zm11.174-.396c-.265.357-.845.367-1.049.367-.458 0-.632-.268-1.345-.784.581-.07 1.131-.09 1.57-.09.773 0 .916.11 1.018.17-.01.05-.062.158-.194.337z"></path> </svg>
HTML;
	
} elseif($doc_type == 'android') {
	
$icon = <<<HTML
<svg width="38" height="38"><path d="M1.8 1.8C1.7 2.1 1.6 2.5 1.6 2.9L1.6 35.2C1.6 35.5 1.7 35.9 1.8 36.2L19.9 19C19.9 19 1.8 1.8 1.8 1.8ZM1.8 1.8" style=" stroke:none;fill:rgb(0%,84.313725%,100%)"/><path d="M27 12.3L5.8 0.5C4.9 0 4.1-0.1 3.4 0.1L21.6 17.4C21.6 17.4 27 12.3 27 12.3ZM27 12.3" style=" stroke:none;fill:rgb(0%,94.117647%,46.27451%)"/><path d="M34.8 16.7L29.1 13.5 23.3 19 29.2 24.6 34.7 21.6C37.4 20.1 36.4 17.6 34.8 16.7ZM34.8 16.7" style=" stroke:none;fill:rgb(100%,87.843137%,0%)"/><path d="M3.4 37.9C4.1 38.1 4.9 38 5.8 37.5L27 25.8 21.6 20.6C21.6 20.6 3.4 37.9 3.4 37.9ZM3.4 37.9" style=" stroke:none;fill:rgb(97.647059%,21.176471%,27.45098%)"/></svg>
HTML;
	
} elseif($doc_type == 'ios') {
	
$icon = <<<HTML
<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 800 800" style="enable-background:new 0 0 800 800;" xml:space="preserve" width="30" height="38"><style type="text/css">.st0{fill:url(#SVGID_1_);}.st1{fill:#FFFFFF;}</style><metadata><sfw xmlns="&ns_sfw;"><slices></slices><sliceSourceBounds bottomLeftOrigin="true" height="800" width="800" x="0" y="0"></sliceSourceBounds></sfw></metadata><linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="400" y1="0" x2="400" y2="800"><stop offset="0" style="stop-color:#0ED4FC"/><stop offset="1" style="stop-color:#0C57EF"/></linearGradient><path class="st0" d="M638.4,0H161.6C72.3,0,0,72.3,0,161.6v476.9C0,727.7,72.3,800,161.6,800h476.9c89.2,0,161.6-72.3,161.6-161.6V161.6C800,72.3,727.7,0,638.4,0z"/><path class="st1" d="M396.6,183.8l16.2-28c10-17.5,32.3-23.4,49.8-13.4c17.5,10,23.4,32.3,13.4,49.8L319.9,462.4h112.9c36.6,0,57.1,43,41.2,72.8h-331c-20.2,0-36.4-16.2-36.4-36.4c0-20.2,16.2-36.4,36.4-36.4h92.8l118.8-205.9l-37.1-64.4c-10-17.5-4.1-39.6,13.4-49.8c17.5-10,39.6-4.1,49.8,13.4L396.6,183.8L396.6,183.8z M256.2,572.7l-35,60.7c-10,17.5-32.3,23.4-49.8,13.4c-17.5-10-23.4-32.3-13.4-49.8l26-45C213.4,542.9,237.3,549.9,256.2,572.7L256.2,572.7z M557.6,462.6h94.7c20.2,0,36.4,16.2,36.4,36.4s-16.2,36.4-36.4,36.4h-52.6l35.5,61.6c10,17.5,4.1,39.6-13.4,49.8c-17.5,10-39.6,4.1-49.8-13.4c-59.8-103.7-104.7-181.3-134.5-233c-30.5-52.6-8.7-105.4,12.8-123.3C474.2,318.1,509.9,380,557.6,462.6L557.6,462.6z"/></svg>
HTML;
	
} elseif($doc_type == 'winphone') {

$icon = <<<HTML
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 88 88" width="30" height="38"><path d="m0 12.402 35.687-4.8602.0156 34.423-35.67.20313zm35.67 33.529.0277 34.453-35.67-4.9041-.002-29.78zm4.3261-39.025 47.318-6.906v41.527l-47.318.37565zm47.329 39.349-.0111 41.34-47.318-6.6784-.0663-34.739z" fill="#00adef"/></svg>
HTML;

}

// Output code
$output = <<<HTML
<div class="download-file">
    <div class="download-file-iconContainer">{$icon}</div>
    <div class="download-fileWrapper">
        <div class="download-file-name">{$doc_name}</div>
        <div class="download-file-link"><a href="{$atts['href']}" target="_blank" rel="noopener noreferrer nofollow">Скачать</a></div>
    </div>
</div>
HTML;
	
return $output;
		
		//'<blockquote class="download ' . $atts['type'] . '"><a target="_blank" href="' . $atts['href'] . '">' . $atts['title'] . '</a></blockquote>';
}