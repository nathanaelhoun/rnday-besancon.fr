TARGETS = fr
TEMPLATES_DIR = files_to_modify
FINAL_DIR = docs

all: $(TARGETS)

fr:
	mustache $(TEMPLATES_DIR)/common.json $(TEMPLATES_DIR)/about.mustache > $(FINAL_DIR)/about.big.html
	mustache $(TEMPLATES_DIR)/common.json $(TEMPLATES_DIR)/activites.mustache > $(FINAL_DIR)/activites.big.html
	mustache $(TEMPLATES_DIR)/common.json $(TEMPLATES_DIR)/news.mustache > $(FINAL_DIR)/news.big.html
	mustache $(TEMPLATES_DIR)/common.json $(TEMPLATES_DIR)/index.mustache > $(FINAL_DIR)/index.big.html
	mustache $(TEMPLATES_DIR)/common.json $(TEMPLATES_DIR)/contact.mustache > $(FINAL_DIR)/contact.big.html
	minify $(FINAL_DIR)/about.big.html > $(FINAL_DIR)/about.html 
	minify $(FINAL_DIR)/activites.big.html > $(FINAL_DIR)/activites.html 
	minify $(FINAL_DIR)/news.big.html > $(FINAL_DIR)/news.html 
	minify $(FINAL_DIR)/index.big.html > $(FINAL_DIR)/index.html 
	minify $(FINAL_DIR)/contact.big.html > $(FINAL_DIR)/contact.html 
	rm -f $(FINAL_DIR)/*.big.*
	rm -f $(FINAL_DIR)/css/all.min.css
	minify $(FINAL_DIR)/css/*.css > $(FINAL_DIR)/css/all.min.css 	

clean:
	rm -f $(FINAL_DIR)/*.html
	rm -f $(FINAL_DIR)/css/all.min.css

mrproper: clean
