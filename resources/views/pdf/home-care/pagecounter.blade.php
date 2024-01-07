<style>
    #pageCounter {
      position: fixed;
      left: 20px;
      bottom: 0;
      text-align: center;
    }
    #pageCounter .count:after {
        content: counter(page) " of " counter(pages);
    }
    </style>

<div id="pageCounter">
    <p class="count">Page </p>
</div>