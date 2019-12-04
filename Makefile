TARGETS = fr
TEMPLATES_DIR = files_to_modify

all: $(TARGETS)

fr:
	mustache $(TEMPLATES_DIR)/common.json $(TEMPLATES_DIR)/about.mustache > docs/about.html
	mustache $(TEMPLATES_DIR)/common.json $(TEMPLATES_DIR)/activites.mustache > docs/activites.html
	mustache $(TEMPLATES_DIR)/common.json $(TEMPLATES_DIR)/news.mustache > docs/news.html
	mustache $(TEMPLATES_DIR)/common.json $(TEMPLATES_DIR)/index.mustache > docs/index.html
	mustache $(TEMPLATES_DIR)/common.json $(TEMPLATES_DIR)/contact.mustache > docs/contact.html

clean:
	rm -f docs/*.html

mrproper: clean
