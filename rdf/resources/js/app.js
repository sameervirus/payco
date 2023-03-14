import Alpine from "alpinejs";
import Glide from "@glidejs/glide";

window.Alpine = Alpine;

Alpine.start();
import $ from "jquery";
// import validate from "jquery-validation";
window.$ = $;
const config = {
    type: "slider",
    startAt: 0,
    perView: 3,
    gap: 32,
    rewind: false,
    bound: true,
    breakpoints: {
        1280: {
            perView: 3,
        },
        1024: {
            perView: 2,
        },
        768: {
            perView: 1,
        },
    },
};
if ($(".glide").length > 0) {
    new Glide(".glide", config).mount();
}

// Grab HTML Elements
const btn = document.querySelector("button.mobile-menu-button");
const btnh = document.querySelector("button.mobile-menu-hide");
const menu = document.querySelector(".mobile-menu");

// Add Event Listeners
btn.addEventListener("click", () => {
    menu.classList.toggle("translate-x-full");
});
btnh.addEventListener("click", () => {
    menu.classList.toggle("translate-x-full");
});
$(function () {
    $(".acc-head").on("click", function (e) {
        const ele = $(this).data("id");
        e.preventDefault();
        $(".acc-head").each(function () {
            $(this).removeClass("active");
        });
        $(this).addClass("active");
        $(".acc-body").each(function () {
            $(this).addClass("hidden");
        });
        $("#sm-" + ele).removeClass("hidden");
        $(".acc-lg-body").each(function () {
            $(this).addClass("translate-y-full bottom-0 opacity-0");
        });
        $("#lg-" + ele)
            .removeClass("translate-y-full bottom-0 opacity-0")
            .addClass("top-0");
    });
});

$(function () {
    // Validate Username
    $("#namecheck").hide();
    $("#emailcheck").hide();
    $("#passwordcheck").hide();
    let usernameError = false;
    let emailError = false;
    let passwordError = false;
    $("#name").on("keyup", function () {
        validateUsername();
    });
    $("#email").on("blur", function () {
        validateEmail();
    });
    $("#password").on("keyup", function () {
        validatePassword();
    });

    function validateUsername() {
        let usernameValue = $("#name").val();
        if (usernameValue.length == "") {
            $("#namecheck").show();
            usernameError = false;
        } else if (usernameValue.length < 3 || usernameValue.length > 255) {
            $("#namecheck").show();
            $("#namecheck").html(
                "**length of username must be between 3 and 255"
            );
            usernameError = false;
        } else {
            usernameError = true;
            $("#namecheck").hide();
        }
        validateRegister();
    }

    // Validate Email
    function validateEmail() {
        let emailValue = $("#email").val();
        let regex =
            /^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;

        if (emailValue.length == "") {
            $("#emailcheck").show();
            emailError = false;
        } else if (!regex.test(emailValue)) {
            $("#emailcheck").show();
            emailError = false;
        } else {
            emailError = true;
            $("#emailcheck").hide();
        }
        validateLogin();
        validateRegister();
    }

    function validatePassword() {
        let passwordValue = $("#password").val();
        if (passwordValue.length == "") {
            $("#passwordcheck").show();
            passwordError = false;
        } else if (passwordValue.length < 5 || passwordValue.length > 9) {
            $("#passwordcheck").show();
            $("#passwordcheck").html(
                "**length of password must be between 6 and 8"
            );
            passwordError = false;
        } else {
            passwordError = true;
            $("#passwordcheck").hide();
        }
        validateLogin();
    }

    function validateRegister() {
        if (usernameError == true && emailError == true) {
            $("#submitRegister").attr("disabled", false);
        } else {
            $("#submitRegister").attr("disabled", "disabled");
        }
    }

    // Submit button
    $("#submitRegister").on("click", function () {
        validateUsername();
        validateEmail();
        if (usernameError == true && emailError == true) {
            $("#registerForm").trigger("submit");
            return true;
        } else {
            return false;
        }
    });

    function validateLogin() {
        if (passwordError == true && emailError == true) {
            $("#submitLogin").attr("disabled", false);
        } else {
            $("#submitLogin").attr("disabled", "disabled");
        }
    }
    // Submit button
    $("#submitLogin").on("click", function () {
        validateEmail();
        validatePassword();
        if (passwordError == true && emailError == true) {
            $("#loginForm").trigger("submit");
            return true;
        } else {
            return false;
        }
    });
});

$(function () {
    $("#passwordForm #password").on("keyup", function () {
        if ($(this).val().length > 5 && $(this).val().length < 9) {
            $("#passwordForm #passLength").addClass("valid");
        } else {
            $("#passwordForm #passLength").removeClass("valid");
        }

        if (isUpperCase($(this).val())[0]) {
            $("#passwordForm #passUpper").addClass("valid");
        } else {
            $("#passwordForm #passUpper").removeClass("valid");
        }

        if (isUpperCase($(this).val())[1]) {
            $("#passwordForm #passLower").addClass("valid");
        } else {
            $("#passwordForm #passLower").removeClass("valid");
        }

        if ($(this).val() == $("#passwordForm #password_confirmation").val()) {
            $("#passwordForm #passMatch").addClass("valid");
        } else {
            $("#passwordForm #passMatch").removeClass("valid");
        }
        validateValid();
    });

    $("#passwordForm #password_confirmation").on("keyup", function () {
        if ($(this).val() == $("#passwordForm #password").val()) {
            $("#passwordForm #passMatch").addClass("valid");
        } else {
            $("#passwordForm #passMatch").removeClass("valid");
        }
        validateValid();
    });

    $("#passwordForm").on("submit", function (e) {
        e.preventDefault();
        var data = getFormData($(this));
        const email = $(this).data("email");
        $.post("/register/password/" + email, data)
            .done(function (data) {
                if (data == "ok") {
                    $("#finishing").removeClass("hidden");
                }
            })
            .fail(function (data) {
                console.log(data);
            });
    });

    function getFormData($form) {
        var unindexed_array = $form.serializeArray();
        var indexed_array = {};

        $.map(unindexed_array, function (n, i) {
            indexed_array[n["name"]] = n["value"];
        });

        return indexed_array;
    }

    function validateValid() {
        if ($("#passwordForm .valid").length === 4) {
            $("#passwordForm #submitPassword").attr("disabled", false);
        } else {
            $("#passwordForm #submitPassword").attr("disabled", "disabled");
        }
    }

    function isUpperCase(strings) {
        var i = 0;
        var character = "";
        var upper = false;
        var lower = false;
        while (i <= strings.length) {
            character = strings.charAt(i);
            if (!isNaN(character * 1)) {
            } else {
                if (character == character.toUpperCase()) {
                    upper = true;
                }
                if (character == character.toLowerCase()) {
                    lower = true;
                }
            }
            i++;
        }

        return [upper, lower];
    }
});

$(function () {
    $(".verify input").on("keyup", function () {
        if ($(this).val().length >= 1) {
            var input_flds = $(this).closest("form").find(":input");
            input_flds.eq(input_flds.index(this) + 1).focus();
        }
    });

    $("#resendCode").on("click", function (e) {
        e.preventDefault();
        const email = $(this).data("email");
        const token = $(this).data("token");
        $.post("/email-notification", { email: email, _token: token })
            .done(function (data) {
                alert("Resend the code to your email, please check");
            })
            .fail(function (data) {
                console.log(data);
            });
    });
});

$(function () {
    $(".select-category").on("click", function (e) {
        e.preventDefault();
        $(".select-category").each(function () {
            $(this).removeClass("active-category");
        });
        $(this).addClass("active-category");
        $("#category-title").text($(this).text());
        const slug = $(this).attr("id");
        $("#category-link").attr("href", "/category/" + slug);

        $("#categories-div > *:gt(0)").remove();

        var sp = posts.filter(function (p) {
            return p.categories.find(function (c) {
                return c.slug == slug;
            });
        });

        let htmlData = "";
        if (sp.length > 0) {
            for (let i = 0; i < 4; i++) {
                htmlData += `<div id="${sp[i].id}" class="relative max-h-[180px] overflow-hidden rouned-[10px]"><img class="h-full rounded-[10px] w-auto" src="/storage/${sp[i].photo}" alt="The three key areas of fintech acquisition success">                        <div class="absolute flex items-end left-0 top-0 w-full h-full p-5 bg-gradient-to-t from-black via-black/30 to-black/30">                            <a href="/post/${sp[i].slug}"><h4 class="capitalize font-light leading-3 lg:leading-5 text-[10px] lg:text-[16px] text-white hover:text-primary">${sp[i].title}</h4></a>                        </div>                    </div>                `;
            }
        } else {
            htmlData =
                '<div class="col-span-2 text-center text-white">No posts found in this category</div>';
        }

        $("#categories-div").append(htmlData);
    });
});
