
/*CSS Styles */
<style>
  .wrapper_1200 {max-width:1200px; margin: 0 auto; }
	 .post_wrapper { max-width: 1200px; margin: 0 auto; display:flex; column-gap:15px; flex-wrap:wrap; justify-content:space-between; }
	 .post_item { width: 32%; padding:26px 15px; border-radius:15px; border:1px solid #e88d9740;box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px; margin-bottom: 30px; }
	 .post_image { border-radius:10px; overflow:hidden;margin-bottom: 15px;width:100%;height:235px;background-size:cover;background-position:center;background-repeat:no-repeat; }
	 .post_image img { opacity:0; width:100%; }
	 .post_date_time { color:#97989f;font-size: 14px;display: block; margin-bottom: 5px; }
	 .post_title { font-weight: 600;color:#49453e;font-size: 24px; line-height: 26px;margin-bottom: 5px; }
	 .post_excerpt { line-height: 21px; font-size: 14px;}
	 .read_more { color: #fff;
		background-color: #e88d97;
		border-radius: 25px;
		padding: 10px;
		display: block;
		width: 150px;
		text-align: center;
		margin: 25px auto 0;
		font-weight: 500;
	 }
	 /*.post_pagination ul { list-style:none; display:flex;column-gap:10px; }
	 .post_pagination a.active {  color:#fff;background-color:#e88d97; border-radius:5px; }*/
	 
	 .visuallyhidden {
	  border: 0;
	  clip: rect(0 0 0 0);
	  height: 1px;
	  margin: -1px;
	  overflow: hidden;
	  padding: 0;
	  position: absolute;
	  width: 1px;
	  white-space: nowrap;
	}
	  
	.pagination li {
	  display: inline; 
	  margin: 0 0px ;
	  padding: 0 8px;
	}
	.pagination { justify-content: center; margin-bottom: 10px;margin-top: 20px; } 
	.pagination li.active {  color:#fff;background-color:#e88d97; border-radius:5px; }
	 
</style>

/* Liquid Script  */
{%- paginate blogs.news.articles by 9 -%}
    <div class="post_wrapper">
		{% for article in blogs.news.articles %}
		   <div class="post_item post_item-1">
				<div class="post_image" style="background-image:url('{{ article.image | img_url: 'master' }}');"><a href="{{ article.url }}"><img src="{{ article.image | img_url: 'master' }}" alt="" /></a></div>
				<span class="post_date_time">{{ article.published_at | date: "%B %d, %Y" }}</span>
				<h3 class="post_title">{{- article.title | link_to: article.url }}</h3>
				<div class="post_excerpt">{{ article.excerpt | truncatewords: 70 }}...</div>
				<a class="read_more" href="{{ article.url }}">READ MORE</a>
			</div>
		{% endfor %}
	</div>
	{%- if paginate.pages > 1 -%}
    <nav role="navigation">
      <ol class="pagination">
        {%- if paginate.previous-%}
		  <!--
          <li>
            <a href="{{ paginate.previous.url }}">
              <span aria-hidden="true">&laquo;</span>
              Previous <span class="visuallyhidden">page</span>
            </a>
          </li>
		  -->
        {%- else -%}
		<!--
          <li class="disabled">
            <span aria-hidden="true">&laquo;</span>
            Previous <span class="visuallyhidden">page</span>
          </li>
		  -->
        {%- endif -%}

        {%- for part in paginate.parts -%}
          {%- if part.is_link -%}
            <li>
              <a href="{{ part.url }}">
                <span class="visuallyhidden">page</span> {{ part.title }}
              </a>
            </li>
          {%- else -%}
            {%- if part.title == paginate.current_page -%}
              <li class="active" aria-current="page">
                <span class="visuallyhidden">page</span> {{ part.title }}
              </li>
            {%- else -%}
              <li>
                <span class="visuallyhidden">page</span> {{ part.title }}
              </li>
            {%- endif -%}
          {%- endif -%}
        {%- endfor -%}

        {%- if paginate.next -%}
		<!--
          <li>
            <a href="{{ paginate.next.url }}">
              Next <span class="visuallyhidden">page</span>
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
		-->
        {%- else -%}
		<!--
          <li class="disabled">
            Next <span class="visuallyhidden">page</span>
            <span aria-hidden="true">&raquo;</span>
          </li>
		  -->
        {%- endif -%}
      </ol>
    </nav>
  {%- endif -%}
	
{%- endpaginate -%}

