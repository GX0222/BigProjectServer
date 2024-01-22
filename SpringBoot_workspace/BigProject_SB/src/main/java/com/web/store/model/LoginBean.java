package com.web.store.model;

public class LoginBean {
	String account;
	String password;
	String invalidCredentials;
	boolean rememberMe;
	
	public LoginBean() {
	}

	public LoginBean(String account, String password, boolean rememberMe) {
		super();
		this.account = account;
		this.password = password;
		this.rememberMe = rememberMe;
	}

	public String getAccount() {
		return account;
	}

	public void setAccount(String account) {
		this.account = account;
	}

	public String getPassword() {
		return password;
	}

	public void setPassword(String password) {
		this.password = password;
	}

	public String getInvalidCredentials() {
		return invalidCredentials;
	}

	public void setInvalidCredentials(String invalidCredentials) {
		this.invalidCredentials = invalidCredentials;
	}

	public boolean isRememberMe() {
		return rememberMe;
	}

	public void setRememberMe(boolean rememberMe) {
		this.rememberMe = rememberMe;
	}

	@Override
	public String toString() {
		StringBuilder builder = new StringBuilder();
		builder.append("LoginBean [account=");
		builder.append(account);
		builder.append(", password=");
		builder.append(password);
		builder.append(", rememberMe=");
		builder.append(rememberMe);
		builder.append("]");
		return builder.toString();
	}
	
}
