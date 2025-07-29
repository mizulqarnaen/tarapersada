<!-- wp_footer -->
<script type="speculationrules"> {
    "prefetch": [
        {
        "source": "document",
        "where": {
            "and": [
            { "href_matches": "\/*" },
            {
                "not": {
                "href_matches": [
                    "\/wp-*.php",
                    "\/wp-admin\/*",
                    "\/wp-content\/uploads\/*",
                    "\/wp-content\/*",
                    "\/wp-content\/plugins\/*",
                    "\/wp-content\/themes\/themify-ultra\/*",
                    "\/*\\?(.+)"
                ]
                }
            },
            { "not": { "selector_matches": "a[rel~=\"nofollow\"]" } },
            {
                "not": { "selector_matches": ".no-prefetch, .no-prefetch a" }
            }
            ]
        },
        "eagerness": "conservative"
        }
    ]
    }
</script>
<script type="text/javascript">
    function revslider_showDoubleJqueryError(sliderID) {
    var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
    errorMessage += " < br > This includes make eliminates the revolution slider libraries, and make it not work.
    ";
    errorMessage += " < br > < br > To fix it you can: < br > & nbsp; & nbsp; & nbsp;
    1. In the Slider Settings - > Troubleshooting set option: < strong > < b > Put JS Includes To Body < /b> < /strong> option to true.";
    errorMessage += " < br > & nbsp; & nbsp; & nbsp;
    2. Find the double jquery.js include and remove it.
    ";
    errorMessage = " < span style = 'font-size:16px;color:#BC0C06;' > " +
    errorMessage + "</span>";
    jQuery(sliderID).show().html(errorMessage);
    }
</script>
<!--googleoff:all-->
<!--noindex-->
<!--noptimize-->
<script id="tf_vars" data-no-optimize="1" data-noptimize="1" defer="defer" src="data:text/javascript;base64,dmFyIHRoZW1pZnlTY3JpcHQgPSB7ImhlYWRlclR5cGUiOiJoZWFkZXItdG9wLXdpZGdldHMiLCJzdGlja3lfaGVhZGVyIjoiIiwicGFnZUxvYWRlckVmZmVjdCI6IiIsImluZmluaXRlRW5hYmxlIjoiMCJ9Owp2YXIgdGJMb2NhbFNjcmlwdCA9IHsiYnJlYWtwb2ludHMiOnsidGFibGV0X2xhbmRzY2FwZSI6Wzc2OSwxMDI0XSwidGFibGV0IjpbNDgxLDc2OF0sIm1vYmlsZSI6NDgwfSwic2Nyb2xsSGlnaGxpZ2h0Ijp7InNwZWVkIjo5MDAuMDF9LCJhZGRvbnMiOnsiZmVhdHVyZSI6eyJqcyI6MX19fTsKdmFyIHRoZW1pZnlfdmFycyA9IHsibWVudV9wb2ludCI6IjEwMDAiLCJ3cCI6IjYuOC4yIiwiYWpheF91cmwiOiJodHRwczovL3d3dy5iYXJheWFhY2FkZW15LmNvbS93cC1hZG1pbi9hZG1pbi1hamF4LnBocCIsImluY2x1ZGVzVVJMIjoiaHR0cHM6Ly93d3cuYmFyYXlhYWNhZGVteS5jb20vd3AtaW5jbHVkZXMvIiwibWVudV90b29sdGlwcyI6W10sInBsdWdpbl91cmwiOiJodHRwczovL3d3dy5iYXJheWFhY2FkZW15LmNvbS93cC1jb250ZW50L3BsdWdpbnMiLCJ0aGVtZV92IjoiNy4xLjQiLCJlbWFpbFN1YiI6IkNoZWNrIHRoaXMgb3V0ISIsIm5vcCI6IkNoZWNrIHRoaXMgb3V0ISIsImxpZ2h0Ym94Ijp7ImkxOG4iOnsidENvdW50ZXIiOiIlY3VyciUgb2YgJXRvdGFsJSJ9fSwic192IjoiNS4zLjkiLCJkb25lIjp7InRiX3RleHQiOnRydWUsInRmX3NlYXJjaF9mb3JtIjp0cnVlLCJ0Yl9pY29uIjp0cnVlLCJ0Yl9kaXZpZGVyIjp0cnVlLCJ0Yl9pbWFnZSI6dHJ1ZSwidGJfYXBwIjp0cnVlLCJ0Yl9pbWFnZV9jZW50ZXIiOnRydWUsInRiX2NvdmVyIjp0cnVlLCJ0Yl9mZWF0dXJlIjp0cnVlLCJ0Yl9mZWF0dXJlX3JpZ2h0Ijp0cnVlLCJ0Yl9wb3N0Ijp0cnVlLCJ0Zl9ncmlkX3RoZW1lX2dyaWQzIjp0cnVlLCJ0Zl9ncmlkX2dyaWQzIjp0cnVlLCJ0Yl9zdHlsZSI6dHJ1ZSwidGZfdGhlbWVfd2lkZ2V0X3RoZW1pZnlfZmVhdHVyZV9wb3N0cyI6dHJ1ZX19Ow=="></script>
<!--/noptimize-->
<!--/noindex-->
<!--googleon:all-->
<script defer="defer" data-v="7.1.1" data-pl="https://www.barayaacademy.com/wp-content/plugins/fake.css" data-no-optimize="1"
data-noptimize="1" src="{{ asset('assets/vendor/libs/themify-ultra/themify/js/main.min.js') }}" id="themify-main-script-js"></script>
<script src="{{ asset('assets/vendor/libs/contact-form-7/swv/js/index.js') }}" id="swv-js"></script>
<script defer="defer" src="{{ asset('assets/vendor/libs/contact-form-7/js/index.js') }}" id="contact-form-7-js"></script>
<script id="contact-form-7-js-extra">
      var wpcf7 = {
        api: {
          root: "https:\/\/www.barayaacademy.com\/wp-json\/",
          namespace: "contact-form-7\/v1",
        },
      };
    </script>