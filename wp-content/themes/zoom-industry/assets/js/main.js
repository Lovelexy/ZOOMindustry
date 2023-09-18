 //Forms alternar
 
(function ($) {
  console.log('Script carregado!');
  //Menu mobile
  function menuMobile() {
    $(".navbar-toggler[data-trigger]").on("click", function (e) {
      e.preventDefault();
      e.stopPropagation();
      var offcanvas_id = $(this).attr("data-trigger");
      $(offcanvas_id).toggleClass("show");
      $("body").toggleClass("offcanvas-active");
      $(".screen-overlay").toggleClass("show");
    });

    $(document).on("keydown", function (event) {
      if (event.keyCode === 27) {
        $(".offcanvas-left").removeClass("show");
        $("body").removeClass("overlay-active");
      }
    });
    jQuery(document).on('change', '#tipo_documento', function() {
      var selecao = jQuery(this).val();
      console.log('Seleção alterada para:', selecao);
      
      if (selecao === 'cpf') {
          jQuery('#form_cnpj').hide();
          jQuery('#form_cpf').show();
      } else if (selecao === 'cnpj') {
          jQuery('#form_cpf').hide();
          jQuery('#form_cnpj').show();
      }
  });

    $(".btn-close, .screen-overlay").click(function (e) {
      $(".screen-overlay").removeClass("show");
      $(".offcanvas-left").removeClass("show");
      $("body").removeClass("offcanvas-active");
    });

    $(".header .mobile-menu .navbar-nav li a").click(function (e) {
      $(this).next().slideToggle(200);
    });
  }

  //Slider Home
  function sliderHome() {
    $(".home-slideshow .wrap").slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      dots: false,
      autoplay: true,
      autoplaySpeed: 7000,
      lazyLoad: "progressive",
    });

    AOS.refresh();
  }
 



  //Slider Cases
  function sliderCases() {
    $(".about-cases__list").slick({
      infinite: false,
      slidesToShow: 4,
      slidesToScroll: 4,
      arrows: true,
      dots: false,
      autoplay: false,
      autoplaySpeed: 7000,
      lazyLoad: "progressive",
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
          },
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
          },
        },
        {
          breakpoint: 460,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
      ],
    });
  }

  //Slider Galeria
  function sliderGallery() {
    $(".product-gallery .wrap").slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      dots: false,
      autoplay: false,
      autoplaySpeed: 7000,
      lazyLoad: "progressive",
    });
  }

  // Animações
  function aosAnimation() {
    AOS.init({
      duration: 500,
    });
  }

  // Máscaras
  function formMasks() {
    $(".wpcf7-form-control.wpcf7-tel").mask("(99) 9999-99999");
    $(".wpcf7-form-control.wpcf7-tel").on("blur", function() {
      var last = $(this).val().substr( $(this).val().indexOf("-") + 1 );

      if( last.length == 5 ) {
          var move = $(this).val().substr( $(this).val().indexOf("-") + 1, 1 );

          var lastfour = last.substr(1,4);

          var first = $(this).val().substr( 0, 9 );

          $(this).val( first + move + '-' + lastfour );
      }
    });​

    $(".cnpj").mask("99.999.999/9999-99");
    $(".money").mask("#.##0,00", {reverse: true});
    $(".cep").mask("99999-999");

    $(".tel").mask("(99) 9999-99999");
    $(".tel").on("blur", function() {
        var last = $(this).val().substr( $(this).val().indexOf("-") + 1 );

        if( last.length == 5 ) {
            var move = $(this).val().substr( $(this).val().indexOf("-") + 1, 1 );

            var lastfour = last.substr(1,4);

            var first = $(this).val().substr( 0, 9 );

            $(this).val( first + move + '-' + lastfour );
        }
    });​    
  }

  //Galeria fancybox
  function fancybox() {
    $('[data-fancybox="gallery"]').fancybox({
      smallBtn: true,
      buttons: ["zoom", "close"],
    });
  }

  function animateLabel() {
    const formsWithAnimatedLabels = document.querySelectorAll(".wpcf7");
    const focusedClass = "focused";

    for (const form of formsWithAnimatedLabels) {
      const formControls = form.querySelectorAll(
        '[type="text"], [type="email"], [type="tel"], textarea, select'
      );
      for (const formControl of formControls) {
        formControl.addEventListener("focus", function () {
          this.parentElement.nextElementSibling.classList.add(focusedClass);
        });
        
        $(".wpcf7-form-control.wpcf7-tel").mask("(99) 9999-99999");
        $(".wpcf7-form-control.wpcf7-tel").on("blur", function() {
          var last = $(this).val().substr( $(this).val().indexOf("-") + 1 );

          if( last.length == 5 ) {
              var move = $(this).val().substr( $(this).val().indexOf("-") + 1, 1 );

              var lastfour = last.substr(1,4);

              var first = $(this).val().substr( 0, 9 );

              $(this).val( first + move + '-' + lastfour );
          }
        });​

        $(".full-phone").mask("(99) 9999-99999");
        $(".full-phone").on("blur", function() {
          var last = $(this).val().substr( $(this).val().indexOf("-") + 1 );

          if( last.length == 5 ) {
              var move = $(this).val().substr( $(this).val().indexOf("-") + 1, 1 );

              var lastfour = last.substr(1,4);

              var first = $(this).val().substr( 0, 9 );

              $(this).val( first + move + '-' + lastfour );
          }
        });​
        
          $('.date').mask('11/11/1111');
          $('.time').mask('00:00:00');
          $('.date_time').mask('00/00/0000 00:00:00');
          $('.cep').mask('00000-000');
          $('.phone').mask('0000-0000');
          $('.phone_with_ddd').mask('(00) 0000-0000');
          $('.phone_us').mask('(000) 000-0000');
          $('.mixed').mask('AAA 000-S0S');
          $('.cpf').mask('000.000.000-00', {reverse: true});
          $('.money').mask('000.000.000.000.000,00', {reverse: true});
        
        $(".cnpj").mask("99.999.999/9999-99");
        $(".full-cep").mask("00000-000");
        $(".full-date").mask("00/00/0000");
        $(".full-money").mask("000.000.000.000.000,00", { reverse: true });
      }

      //Galeria fancybox
      function fancybox() {
        $('[data-fancybox="gallery"]').fancybox({
          smallBtn: true,
          buttons: ["zoom", "close"],
        });
      }

      form.parentElement.addEventListener("wpcf7mailsent", function () {
        const labels = document.querySelectorAll(".focused");
        for (const label of labels) {
          label.classList.remove(focusedClass);
        }
      });
    }
  }

  function stopVideo() {
    $("body").on("hidden.bs.modal", ".modal", function () {
      $("video").trigger("pause");
    });
  }

  function menuAnime() {
    $(
      ".header .navbar .navbar-nav .menu-item.menu-item-has-children"
    ).mouseover(function () {
      $(this).addClass("active");
    });
    $(
      ".header .navbar .navbar-nav .menu-item.menu-item-has-children"
    ).mouseleave(function () {
      $(this).removeClass("active");
    });
  }

  /*$(window).on('load',function(){
        $('#modalZoomb2b').modal('show');
    });*/

  function calcHeightPartners() {
    if ($(window).width() > 900) {
      $(".find-partner section.partner-content .wrapper").each(function () {
        var $_thisRight = $(
          ".find-partner section.partner-content .wrapper .right"
        );
        var elementRightHeight = $_thisRight
          .map(function () {
            return $(this).height();
          })
          .get();

        var $_thisLeft = $(
          ".find-partner section.partner-content .wrapper .inner-left"
        );
        var elementLeftHeight = $_thisLeft
          .map(function () {
            return $(this).height();
          })
          .get();

        var maxHeightRight = Math.max.apply(null, elementRightHeight);
        var maxHeightLeft = Math.max.apply(null, elementLeftHeight);

        if (maxHeightRight > maxHeightLeft) {
          $(
            ".find-partner section.partner-content .wrapper .left .inner-left"
          ).css("height", maxHeightRight);
        } else {
          $(".find-partner section.partner-content .wrapper .right").css(
            "height",
            maxHeightLeft
          );
        }
      });
    }
  }

  function calcHeightFilterPartners() {
    if ($(window).width() > 501) {
      var t = 0;
      var t_elem;
      $(".find-partner .partner-result .list .block address").each(function () {
        $this = $(this);
        if ($this.outerHeight() > t) {
          t_elem = this;
          t = $this.outerHeight();
        }
      });

      $(".find-partner .partner-result .list .block address").css("height", t);

      var s = 0;
      var s_elem;
      $(".find-partner .partner-result .list .block .name").each(function () {
        $this = $(this);
        if ($this.outerHeight() > s) {
          s_elem = this;
          s = $this.outerHeight();
        }
      });

      $(".find-partner .partner-result .list .block .name").css("height", s);
    }
  }

  function consultaCertificado() {
    $("#searchCertificate").on("submit", function (e) {
      e.preventDefault();

      $.ajax({
        type: "POST",
        url: wp.conecta_ajax,
        data: {
          action: "consultaCertificado",
          serial: jQuery(this).find("#serial").val(),
        },
        beforeSend: function (response) {
          $("#resultCertificate").html("");
          $(".cert_loader").removeClass("d-none");
        },
      })
        .done(function (response) {
          $(".cert_loader").addClass("d-none");
          if (response.success == true) {
            $("html, body").animate(
              {
                scrollTop: $(".resultCertificate").offset().top,
              },
              300
            );
            $(".resultCertificate .container").removeClass("d-none");
            var certs = response.data.cert;
            $("#resultCertificate").html(`
                        <table class="table table-striped table-bordered table-light">
                        <thead>
                            <tr>
                                <th scope="col">Número de Série</th>
                                <th scope="col">Descrição</th>
                                <th scope="col">Modelo</th>
                                <th scope="col">Início da Garantia</th>
                                <th scope="col">Fim da Garantia</th>
                                <th scope="col">Pacote de Serviços</th>
                                <th scope="col">Status</th>
                                <th scope="col">Co-Care Service</th>
                            </tr>
                        </thead>
                        <tbody id="renderTable">
                        </tbody>
                    </table>
                    `);
            $.each(certs, function (i, cert) {
              $("#renderTable").append(`
                        <tr>
                            <th scope="row">${cert.serial}</th>
                            <td>${cert.nome}</td>
                            <td>${cert.modelo}</td>
                            <td>${cert.instalacao}</td>
                            <td>${cert.garantia}</td>
                            <td>${cert.certified}</td>
                            <td>${cert.status}</td>
                            <td>${cert.descricao}</td>
                        </tr>
                        `);
            });
          } else {
            $(".resultCertificate .container").addClass("d-none");
            $("#resultCertificate").html("");
            $("#certError").modal("show");
          }
        })
        .fail(function () {
          $(".resultCertificate .container").addClass("d-none");
          $("#resultCertificate").html("");
          $(".cert_loader").addClass("d-none");
        });
    });

    $("#certError .btn").on("click", function () {
      $("#certError").modal("hide");
    });
  }

  function datePicker() {
    // Datepicker

    (function ($) {
      $.fn.datepicker.dates["pt-BR"] = {
        days: [
          "Domingo",
          "Segunda",
          "Terça",
          "Quarta",
          "Quinta",
          "Sexta",
          "Sábado",
        ],
        daysShort: ["Dom", "Seg", "Ter", "Qua", "Qui", "Sex", "Sáb"],
        daysMin: ["D", "S", "T", "Q", "Q", "S", "S"],
        months: [
          "Janeiro",
          "Fevereiro",
          "Março",
          "Abril",
          "Maio",
          "Junho",
          "Julho",
          "Agosto",
          "Setembro",
          "Outubro",
          "Novembro",
          "Dezembro",
        ],
        monthsShort: [
          "Jan",
          "Fev",
          "Mar",
          "Abr",
          "Mai",
          "Jun",
          "Jul",
          "Ago",
          "Set",
          "Out",
          "Nov",
          "Dez",
        ],
        today: "Hoje",
        monthsTitle: "Meses",
        clear: "Limpar",
        format: "dd/mm/yyyy",
      };
    })(jQuery);

    $(".input-daterange").datepicker({
      language: "pt-BR",
      autoclose: true,
      orientation: "auto auto",
      format: "dd/mm/yyyy",
    });
  }

  function inputNumber() {
    (function () {
      document.querySelectorAll(".quantity-input").forEach((item) => {
        var input = item.querySelector("input");
        var min = parseFloat(input.min) || 1;
        var max = parseFloat(input.max);
        var step = parseFloat(input.step);
        var buttonDown = item.querySelector(".quantity-input__button--minus");
        var buttonUp = item.querySelector(".quantity-input__button--plus");

        input.value = input.value || 1;

        buttonDown.onclick = function () {
          var value = parseFloat(input.value);
          input.value = value <= min ? min : value - step;
        };

        buttonUp.onclick = function () {
          var value = parseFloat(input.value);
          input.value = value >= max ? max : value + step;
        };
      });
    })();
  }

  function selectric() {
    $("select.custom-select").selectric();
  }

  function openFormTip() {
    // $(document).click(function(event) {
    //     if (!$(event.target).closest('.icon-tip, .info-tip').length) {
    //         $('.reg-oportunity section.register-op .wrapper-form .form-group .info-tip').removeClass('active');
    //     }
    // });

    var $openTip = $(".icon-tip");

    $("#registerOportunity").on("click", ".icon-tip", function () {
      //$('.info-tip').removeClass('active');
      $(this).closest("label, li").find(".info-tip").toggleClass("active");
    });
  }

  // Contador de caracteres para a textarea #inputOportunityDetail na página de Registro de Oportunidades
  $("#inputOportunityDetail").on("keyup", function() {
    $("#count_char").text(($("#inputOportunityDetail").val().length) + '/5000');
  });

  // Disparo de alerta caso a div com a classe email-verify apresente erro
  $(".email-check").on("blur", function() {
    if ($(this).parent().hasClass("has-error")) {
      var span = "<span id='email-error-warning' style='font-size: 14px; font-weight: bold; color: red;'>ATENÇÃO! O e-mail inserido parece estar incorreto, favor verificar.</span>";

      if (document.querySelectorAll(".email-verify #email-error-warning").length < 1) {
        $(this).parent().append(span);
      }
      
    } else {
      $("#email-error-warning").remove();
    }
  });

  $(".numbers_only input").on("keyup", function() {
    var valor = $(this).val();

    var replaced = valor.replace(/[^0-9]+/g, '');

    $(this).val(replaced);
  });

  function validateForm() {
    $("#registerOportunity").validator();

    jQuery("#registerOportunity")
      .validator()
      .on("submit", function (e) {
        $_this = $(this);
        if (e.isDefaultPrevented()) {
        } else {
          e.preventDefault();
          $_this.find(".wrap-submit .btn").hide();
          $_this.find(".loading-gif").show();

          var $_url = $baseUrl;

          $.ajax({
            type: "POST",
            url: $_url + "/wp-json/api/v1/opportunity-record/create/",
            data: $(this).serialize(),
            success: function () {
              setTimeout(function () {
                $_this.find(".wrap-submit .btn").show();
                $_this.find(".loading-gif").hide();

                $_this.find("input").val("");

                $("#modalSubmitted").modal("show");
              }, 2500);

              $('#registerOportunity').trigger("reset");
            },
          });          
        }
      });
  }

  //CHANGE CURRENCY TYPE - TOTAL VALUE
  $('#inputCurrencyProd').change(function(){
    var value = $(this).val();
    if(value == "Real"){
      $('#currencyType').text('R$');
    }else if(value == "Dolar"){
      $('#currencyType').text('$');
    }else{
      $('#currencyType').text('€');
    }
  });

  //LOAD AND POPULATE SELECT MODELS BY CATEGORIES
  // $("#inputCatProd").change(function(){
  //   var cat_id = $(this).val();
    
  //   $.get("/zoom-industry/current/wp-json/api/v1/products/list/?cat_id=" + cat_id + "", function (data) {
  //     $("#inputModelProd").find('option').remove();
  //     $('#inputModelProd').append($('<option>', { 
  //       value: 0,
  //       text: 'Selecione o modelo'
  //     }));
      
  //     Object.keys(data).forEach(function(key) {
  //       $('#inputModelProd').append($('<option>', { 
  //         value: data[key].post_title,
  //         text: data[key].post_title
  //       }));
  //       $('#inputModelProd').selectric('refresh');
  //     });
  //   });
  // });

  //ADD NEW PRODUCT FIELDS
  $(".add-prod").click(function(){
    var key = 1 + Math.floor(Math.random() * 9999);
    var cat = $("#inputCatProd").find(":selected").text();
    var model = $("#inputModelProd").val();
    var qty = $("#inputQtyProd").val();
    var currency = $("#inputCurrencyProd").val();
    var price = $("#inputPriceProd").val();
    var country = $("#inputCountryProd").val();

    //Validação dos campos obrigatórios do produto.
    if(price == '' || model == ''){
      alert("Por favor, preencha todos os campos do produto.");
      return false;
    }

    var html = '';

    html += '<div id="inputsFormRow" class="prod-item w100">';
    //Categoria
    html += '<div class="form-group w50"> <label class="control-label">Categoria</label> <input type="text" class="form-control" value="'+ cat +'" readonly> </div>';

    //Modelo
    html += '<div class="form-group w50"> <label class="control-label">Modelo</label> <input type="text" name="produtos[produto_'+ key +'][modelo]" class="form-control" value="'+ model +'" readonly> </div>';

    html += '<div class="wrapper">';
    //Quantidade
    html += '<div class="form-group w20"> <label class="control-label">Quantidade</label> <input type="text" name="produtos[produto_'+ key +'][quantidade]" class="form-control" value="'+ qty +'" readonly> </div>';

    //Moeda
    html += '<div class="form-group w20"> <label class="control-label">Moeda</label> <input type="text" name="produtos[produto_'+ key +'][moeda]" class="form-control" value="'+ currency +'" readonly> </div>';

    //Preço Sugerido
    html += '<div class="form-group w20"> <label class="control-label">Preço Sugerido Unitário</label> <input type="text" name="produtos[produto_'+ key +'][preco_sugerido]" class="form-control" value="'+ price +'" readonly> </div>';
    html += '</div>';

    html += '<input id="priceId'+ key +'" type="hidden" class="price" value="">';

    //Aplicável em qual País?
    html += '<div class="form-group w50"> <label class="control-label">Aplicável em qual País?</label> <input type="text" name="produtos[produto_'+ key +'][aplicavel_em_qual_pais]" class="form-control" value="'+ country +'" readonly> </div>';

    //Remover campos
    html += '<div class="form-group w20 tip-right"> <button type="button" class="btn btn-danger" id="removeButton">Remover</button> </div>';

    html += '</div>';
    $('#newRow').append(html);

    $("#inputQtyProd").val("1");
    // $("#inputCurrencyProd").attr('disabled', 'disabled');
    $("#inputPriceProd").val("");

    $('#inputCurrencyProd').selectric('refresh');

    var preco = price.replaceAll('.', '');
    var preco_replaced = preco.replace(',', '.');
    var preco_final = qty * preco_replaced;
    let preco_real = new Intl.NumberFormat('pt-BR', { style: 'currency', currency: 'BRL' }).format(preco_final);
    let price_final = preco_real.replace('R$', '');

    $('#priceId'+ key).val(price_final);
    
    var sum = 0;
    $('.price').each(function(){
        var val = $(this).val();
        var price_replaced = val.replaceAll('.', '');
        var price_final = price_replaced.replace(',', '.');
        sum += parseFloat(price_final);
    });

    let realBrasil = new Intl.NumberFormat('pt-BR', { style: 'currency', currency: 'BRL' }).format(sum);
    let totalPrice = realBrasil.replace('R$', '');

    $('#totalValue').text(totalPrice);
    $('#totalValueInput').val(totalPrice);
  });

  $(document).on('click', '#removeButton', function () {
    $(this).closest('#inputsFormRow').remove();
    if($("#newRow #inputsFormRow").length < 1){
      $("#inputCurrencyProd").removeAttr('disabled');
      $('#inputCurrencyProd').selectric('refresh');
    }

    var sum = 0;
    $('.price').each(function(){
        var val = $(this).val();
        var price_replaced = val.replace('.', '');
        var price_final = price_replaced.replace(',', '.');
        sum += parseFloat(price_final);
    });

    let realBrasil = new Intl.NumberFormat('pt-BR', { style: 'currency', currency: 'BRL' }).format(sum);
    let totalPrice = realBrasil.replace('R$', '');

    $('#totalValue').text(totalPrice);
    $('#totalValueInput').val(totalPrice);
  });

  function limpa_formulário_cep() {
      // Limpa valores do formulário de cep.
      $("#inputStreetClient").val("");
  }

  //Quando o campo cep perde o foco.
  $("#inputCEPClient").blur(function() {

      //Nova variável "cep" somente com dígitos.
      var cep = $(this).val().replace(/\D/g, '');

      //Verifica se campo cep possui valor informado.
      if (cep != "") {

          //Expressão regular para validar o CEP.
          var validacep = /^[0-9]{8}$/;

          //Valida o formato do CEP.
          if(validacep.test(cep)) {

              //Preenche os campos com "..." enquanto consulta webservice.
              $("#inputStreetClient").val("...");

              //Consulta o webservice viacep.com.br/
              $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                  if (!("erro" in dados)) {
                      //Atualiza os campos com os valores da consulta.
                      $("#inputStreetClient").val(dados.logradouro);
                  } //end if.
                  else {
                      //CEP pesquisado não foi encontrado.
                      limpa_formulário_cep();
                      alert("CEP não encontrado.");
                  }
              });
          } //end if.
          else {
              //cep é inválido.
              limpa_formulário_cep();
              alert("Formato de CEP inválido.");
          }
      } //end if.
      else {
          //cep sem valor, limpa formulário.
          limpa_formulário_cep();
      }
  });


  function validadeDoc() {
    $(".cnpj").blur(function () {
      var $_this = $(this);

      if ($_this.val().length > 14) {
        if (!validarCNPJ($($_this).val())) {
          $("#registerOportunity")
            .find(".wrap-submit .btn-custom")
            .addClass("disabled");

          $(this).closest(".form-group").addClass("has-error");
          $(this).closest(".form-group").find(".help-block").show();

          return false;
        } else {
          $("#registerOportunity")
            .find(".wrap-submit .btn-custom")
            .removeClass("disabled");
          $(this).closest(".form-group").find(".help-block").hide();
        }
      }
    });
  }

  function loadProdutos() {
    $(".categorias").on("change", function () {
      ajaxLoadData(this, "produtos");
    });
  }
  function ajaxLoadData(el, section) {
    let s = "#" + section;

    $.ajax({
      url: ajaxurl,
      data: {
        action: "loadmore",
        categoria: $(el).val(),
        section,
      },
      type: "POST",
      beforeSend: function (xhr) {
        $(s).removeAttr("disabled");
        $(s).children("option").text("Carregando...");
      },
      success: function (result) {
        if (result) {
          $(s).html(result);
        } else {
          $(s).html("<option>Nenhum resultado encontrado.</option>");
        }
      },
    });
  }
  function loading() {
    return '<div class="loader loader--style7" title="6"> <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="30px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve"> <rect x="0" y="0" width="4" height="20" fill="#333"> <animate attributeName="opacity" attributeType="XML" values="1; .2; 1" begin="0s" dur="0.6s" repeatCount="indefinite" /> </rect> <rect x="7" y="0" width="4" height="20" fill="#333"> <animate attributeName="opacity" attributeType="XML" values="1; .2; 1" begin="0.2s" dur="0.6s" repeatCount="indefinite" /> </rect> <rect x="14" y="0" width="4" height="20" fill="#333"> <animate attributeName="opacity" attributeType="XML" values="1; .2; 1" begin="0.4s" dur="0.6s" repeatCount="indefinite" /> </rect> </svg> </div>';
  }

  function buscarComponente() {
    $("#buscarComponente").on("submit", function (e) {
      e.preventDefault();

      $.ajax({
        type: "POST",
        url: ajaxurl,
        data: {
          action: "buscarComponente",
          id: $("select[name=produto_id]").val(),
        },
        beforeSend: function (response) {
          $("#btnComponente").html("Buscando...").attr("disabled", "disabled");
          $("#resultadoComponente").html(
            "<p class='d-block m-3'>Buscando...</p>"
          );
        },
        success: function (result) {
          if (result) {
            $("#resultadoComponente").html(result);
          } else {
            $("#resultadoComponente").html(
              "<p class='d-block m-3'>Nenhum resultado encontrado.</p>"
            );
          }
          $("#btnComponente").html("Buscar").removeAttr("disabled");
        },
      });
    });
  }
  function buscarDrivers() {
    $(".buscar").on("submit", function (e) {
      e.preventDefault();

      var result = "resultado_" + $(this).attr("id");

      console.log("#" + result);

      $("#" + result).html(loading());

      $("#" + result).load(
        $(this).attr("action") + "?" + $(this).serialize() + " #" + result
      );
    });
  }

  $(document).ready(function () {
    menuMobile();
    sliderHome();
    aosAnimation();
    formMasks();
    fancybox();
    sliderCases();
    sliderGallery();
    animateLabel();
    stopVideo();
    menuAnime();
    calcHeightPartners();
    calcHeightFilterPartners();
    consultaCertificado();
    datePicker();
    inputNumber();
    selectric();
    openFormTip();
    validateForm();
    validadeDoc();
    loadProdutos();
    buscarComponente();
    buscarDrivers();
  });
})(jQuery);
