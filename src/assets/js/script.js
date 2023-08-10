$(document).ready(()=>{
    if($("[class$='-inc']").length){
        console.log("sip")
    }
    console.log($('[class~="-inc"]'))

    if($("#navbarNav").length){
        $("#hamburgerBtn").on("click", (e)=>{
            if($(".navbar-toggler").css("display") == "none" && $(".navbar-collapse").hasClass("show")){
                console.log("Tess")
                $(".navbar-collapse").removeClass("bg-light")
            }else{
                $(".navbar-collapse").addClass("bg-light")
            }
        })
    }

    $('.select2-single').select2({
        placeholder: "-- Pilih Salah Satu --",
        allowClear: false
    });

    if($(".inspector").length){
        $(".inspector").each((e)=>{
            if($($(".inspect-in")[e]).attr("type") == "file"){
                // console.log($($(".inspect-in")[e]).val()=="")
                if($($(".inspector")[e]).attr("href")!==""){
                    $($($(".inspect-in")[e]).prev()[0]).addClass("bg-hijau text-white")
                    $($($(".inspect-in")[e]).prev()[0]).removeClass("bg-abu")
                }
            }
            
            $($(".inspector")[e]).attr("target", "_blank")
            let url
            $($(".inspect-in")[e]).on("change", ()=>{
                if($($(".inspect-in")[e]).attr("type") == "url"){
                    url = $($(".inspect-in")[e]).val()
                    $($(".inspector")[e]).attr("href", url)
                }else{
                    URL.revokeObjectURL(url)
                    url = URL.createObjectURL($(".inspect-in")[e].files[0])
                    $($(".inspector")[e]).on("click", (event)=>{
                        event.preventDefault()
                        window.open(url, "_blank")
                    })
                }
                $($($(".inspect-in")[e]).prev()[0]).addClass("bg-hijau text-white")
                $($($(".inspect-in")[e]).prev()[0]).removeClass("bg-abu")
            })
        })
    }
})