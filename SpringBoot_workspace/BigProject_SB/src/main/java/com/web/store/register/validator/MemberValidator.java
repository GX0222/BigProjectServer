package com.web.store.register.validator;

import org.springframework.stereotype.Component;
import org.springframework.validation.Errors;
import org.springframework.validation.ValidationUtils;
import org.springframework.validation.Validator;

import com.web.store.model.MemberBean;
@Component
public class MemberValidator implements Validator {

//	private static Logger log = LoggerFactory.getLogger(MemberValidator.class);

	@Override
	public boolean supports(Class<?> clazz) {
		return MemberBean.class.isAssignableFrom(clazz);
	}

	@Override
	public void validate(Object target, Errors errors) {
		MemberBean member = (MemberBean) target;    // space, tab, enter
			ValidationUtils.rejectIfEmptyOrWhitespace(errors, "account", 	"", "帳號欄不能空白");
			ValidationUtils.rejectIfEmptyOrWhitespace(errors, "username", 		"", "名稱不能空白");
			ValidationUtils.rejectIfEmptyOrWhitespace(errors, "password", 	"", "密碼欄不能空白");
			ValidationUtils.rejectIfEmptyOrWhitespace(errors, "password1", 	"", "密碼確認欄不能空白");
//			ValidationUtils.rejectIfEmptyOrWhitespace(errors, "address", 	"", "地址欄不能空白");
			ValidationUtils.rejectIfEmptyOrWhitespace(errors, "mail", 		"", "電子郵件欄不能空白");
			ValidationUtils.rejectIfEmptyOrWhitespace(errors, "phone", 		"", "電話欄不能空白");
//			ValidationUtils.rejectIfEmpty(errors, "multipartFile",    "", "必須挑選圖片");
			System.out.println("ㄅ");

			if ( !errors.hasFieldErrors("account")) {
				System.out.println("ㄆ");
				if (member.getAccount().length() < 5) {
					errors.rejectValue("account","", "帳號欄不能小於五個字元");
					System.out.println("ㄇ ");
				}
			}

			if (! member.getPassword().equals(member.getPassword1())) {
				System.out.println("ㄈ ");
				errors.rejectValue("password","", "密碼欄與確認密碼不一致");
				System.out.println("ㄍ ");
			}
//			log.info("MemberValidator.validate()");
//			if (member.getMultipartFile().getSize() == 0) {
//				errors.rejectValue("multipartFile", "", "必須挑選圖片");
//			}

	}

}
